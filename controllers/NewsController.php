<?php


namespace app\controllers;


use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $posts = News::find()->all();
        return $this->render('index', [
            'posts' => $posts
        ]);
    }

    public function actionView($id)
    {
        $post = News::findOne(['id' => $id]);
        return $this->render('view', [
            'post' => $post
        ]);
    }
}