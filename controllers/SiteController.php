<?php

namespace app\controllers;

use app\models\AdmissionSearch;
use app\models\Department;
use app\models\Facility;
use app\models\Request;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'index';
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/admin/']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAdmission()
    {
        $searchModel = new AdmissionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

//        VarDumper::dump($dataProvider->getModels(),10,1); die;

        $departments = Department::find()->all();

        return $this->render('admission', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'departments' => $departments
        ]);
    }

    public function actionHistory()
    {
        return $this->render('history');
    }

    public function actionOurServices()
    {
        return $this->render('our-services');
    }

    public function actionInsurance()
    {
        return $this->render('insurance');
    }

    public function actionDirection()
    {
        return $this->render('direction');
    }

    public function actionMap()
    {
        return $this->render('map');
    }

    public function actionSupport()
    {
        return $this->render('support');
    }

    public function actionNonFree()
    {
        return $this->render('non-free');
    }

    public function actionLocation()
    {
        $marks = [];
        $marksModel = Facility::find()->all();

        foreach ($marksModel as $mark) {
            $marks[] = [
                'type' => "Feature",
                "id" => $mark->id,
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [
                        $mark->lat, $mark->lng
                    ]
                ],
                "properties" => [
                    "name" => $mark->name,
                    "address" => $mark->address,
                    "phone" => $mark->phone,
                    "workingHours" => $mark->working_hours,
                    "hintContent" => $mark->name,
                    "clusterCaption" => $mark->name,
                    "iconCaption" => $mark->name
                ],
                "options" => [
                    "preset" => 'islands#blueMedicalIcon',
                ]
            ];
        }

        return $this->render('location', [
            'marks' => $marks
        ]);
    }

    public function actionDauMed()
    {
        return $this->render('dau-med');
    }

    public function actionRequest()
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->mailer->compose()
                ->setFrom('zhandos_38@mail.ru')
                ->setTo('zhandos_38@mail.ru')
                ->setSubject('Заявка к записи к директору')
                ->setHtmlBody('<b>Ф.И.О:</b>' . $model->full_name . '<br><b>Сообщение:</b>' . $model->message)
                ->send();
        }

        return $this->render('request', [
            'model' => $model
        ]);
    }
}