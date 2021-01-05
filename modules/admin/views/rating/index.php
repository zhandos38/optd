<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Rating;
use kartik\daterange\DateRangePicker;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\RatingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Рейтинги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rating-index">

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'employee_id',
                'value' => function(Rating $model) {
                    return $model->employee ? $model->employee->full_name : 'Не указано';
                },
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Employee::find()->all(), 'id', 'full_name')
            ],
            [
                'attribute' => 'value',
                'filter' => [
                    0,1,2,3,4,5,6,7,8,9,10
                ]
            ],
            'comment:ntext',
            'customer_name',
			'iin',
			[
			    'attribute' => 'status',
                'value' => function(Rating $model) {
                    return $model->getStatus();
                },
                'filter' => Rating::getStatuses()
            ],
            [
                'attribute' => 'created_at',
                'value' => function(Rating $model) {
                    return date('d/m/Y H:i', $model->created_at);
                },
                'filter' => DateRangePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'createTimeRange',
                    'convertFormat' => true,
                    'pluginOptions' => [
                        'locale' => [
                            'format'=>'Y-m-d'
                        ],
                        'convertFormat'=>true,
                    ]
                ]),
            ],
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
