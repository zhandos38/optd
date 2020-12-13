<?php


namespace app\controllers;


use app\models\Department;
use yii\web\Controller;

class ScheduleController extends Controller
{
    public function actionIndex()
    {
        $departments = Department::findAll(['is_duty' => true]);
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