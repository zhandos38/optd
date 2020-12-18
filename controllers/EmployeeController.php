<?php
/**
 * Created by PhpStorm.
 * User: Zhandos
 * Date: 11.11.2019
 * Time: 22:37
 */

namespace app\controllers;


use app\models\Department;
use app\models\Employee;
use app\models\Rating;
use yii\helpers\VarDumper;
use yii\web\Controller;

class EmployeeController extends Controller
{
    public function actionIndex()
    {
        $departments = Department::find()->andWhere(['is_staff' => true])->all();
        return $this->render('index', ['departments' => $departments]);
    }

    public function actionList($id)
    {
        $models = Employee::findAll(['department_id' => $id]);
        return $this->render('list', ['models' => $models]);
    }

    public function actionView($id)
    {
        $model = Employee::findOne(['id' => $id]);
        $rating = new Rating();

        if ($rating->load(\Yii::$app->request->post())) {
            $rating->employee_id = $id;
            $rating->save();

            $rating = new Rating();
        }

        return $this->render('view', [
            'model' => $model,
            'ratingModel' => $rating
        ]);
    }
}