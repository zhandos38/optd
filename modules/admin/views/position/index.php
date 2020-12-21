<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PositionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('site', 'Должности');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="position-index">

    <p>
        <?= Html::a(Yii::t('site', 'Добавить'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'name_kz',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
