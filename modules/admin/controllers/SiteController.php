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

        $ratingBad = Rating::find()->andWhere(['<=', 'value', 3])->count();
        $ratingGood = Rating::find()->andWhere(['>', 'value', 3])->count();

        $ratingInform = Rating::find()->andWhere(['is_inform_good' => true])->count();
        $ratingPolite = Rating::find()->andWhere(['is_polite_enough' => true])->count();
        $ratingCompetent = Rating::find()->andWhere(['is_competent_enough' => true])->count();

        return $this->render('index', [
            'ratingUnsolvedQty' => $ratingUnsolvedQty,
            'ratingInProcessQty' => $ratingInProcessQty,
            'ratingFinishedQty' => $ratingFinishedQty,
            'ratingBad' => $ratingBad,
            'ratingGood' => $ratingGood,
            'ratingInform' => $ratingInform,
            'ratingPolite' => $ratingPolite,
            'ratingCompetent' => $ratingCompetent
        ]);
    }
}
