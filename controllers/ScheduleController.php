<?php


namespace app\controllers;


use app\models\Department;
use yii\web\Controller;

class ScheduleController extends Controller
{
    public function actionIndex($id = null)
    {
        $departments = Department::find()->andWhere(['parent_id' => $id])->andWhere(['is_duty' => true])->orderBy(['order' => SORT_ASC])->all();
        return $this->render('index', [
            'departments' => $departments
        ]);
    }

    public function actionView($id)
    {
        $department = Department::findOne(['id' => $id]);
        return $this->render('view', [
            'department' => $department
        ]);
    }
}