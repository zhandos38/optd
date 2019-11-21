<?php


namespace app\controllers;


use yii\web\Controller;

class StaticController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'index';
        return $this->render('index');
    }
}