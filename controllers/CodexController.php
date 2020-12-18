<?php


namespace app\controllers;


use yii\web\Controller;

class CodexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCrime()
    {
        return $this->render('crime');
    }

    public function actionCitizen()
    {
        return $this->render('citizen');
    }

    public function actionMarriage()
    {
        return $this->render('marriage');
    }

    public function actionFinance()
    {
        return $this->render('finance');
    }
}