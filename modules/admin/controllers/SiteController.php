<?php

namespace app\modules\admin\controllers;

use app\models\LoginForm;
use app\models\Rating;
use Yii;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\Response;

/**
 * Default controller for the `admin` module
 */
class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $ratingUnsolvedQty = Rating::find()->where(['status' => Rating::STATUS_NEW])->count();
        $ratingInProcessQty = Rating::find()->where(['status' => Rating::STATUS_IN_PROCESS])->count();
        $ratingFinishedQty = Rating::find()->where(['status' => Rating::STATUS_FINISHED])->count();

        return $this->render('index', [
            'ratingUnsolvedQty' => $ratingUnsolvedQty,
            'ratingInProcessQty' => $ratingInProcessQty,
            'ratingFinishedQty' => $ratingFinishedQty
        ]);
    }
}
