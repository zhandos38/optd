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
    public function actionIndex($id = null)
    {
        $departments = Department::find()->andWhere(['parent_id' => $id])->andWhere(['is_staff' => true])->orderBy(['order' => SORT_ASC])->all();
        return $this->render('index', ['departments' => $departments]);
    }

    public function actionList($id)
    {
        $models = Employee::find()->andWhere(['department_id' => $id])->all();
        return $this->render('list', ['models' => $models]);
    }

    public function actionView($id)
    {
        $model = Employee::findOne(['id' => $id]);
        $rating = new Rating();

        if ($rating->load(\Yii::$app->request->post())) {
            $rating->status = Rating::STATUS_NEW;
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