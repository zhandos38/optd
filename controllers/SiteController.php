<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
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
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionSupport()
    {
        return $this->render('support');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionOurServices()
    {
        return $this->render('our-services');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionInsurance()
    {
        return $this->render('insurance');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionGuarantee()
    {
        return $this->render('guarantee');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionHealthCodex()
    {
        return $this->render('health-codex');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionDisease()
    {
        return $this->render('disease');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAmbulance()
    {
        return $this->render('ambulance');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionOrganization()
    {
        return $this->render('organization');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionInspection()
    {
        return $this->render('inspection');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionDirection()
    {
        return $this->render('direction');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionMedicineHelp()
    {
        return $this->render('medicine-help');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionPaidServices()
    {
        return $this->render('paid-services');
    }
	
	 /**
     * Displays about page.
     *
     * @return string
     */
    public function actionServiceZone()
    {
        return $this->render('service-zone');
    }
}
