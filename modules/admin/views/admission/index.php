<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdmissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Поступление';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-index">

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'full_name',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    switch ($model->status) {
                        case 0:
                            $status = 'Госпитализирован';
                            break;
                        case 1:
                            $status = 'Отказ от госпитализации';
                            break;
                        case 2:
                            $status = 'Переведен';
                            break;
                    }
                    return $status;
                }
            ],
            [
                'attribute' => 'type',
                'value' => function($model) {
                    switch ($model->type) {
                        case 0:
                            $type = 'Плановый';
                            break;
                        case 1:
                            $type = 'Экстренный';
                            break;
                        case 2:
                            $type = 'Неотложенный';
                            break;
                    }
                    return $type;
                }
            ],
            [
                'attribute' => 'department_id',
                'value' => function($model) {
                       return $model->department ? $model->department->name : 'Не верно указан';
                }
            ],
            //'room',
            //'is_discharged',
            //'updated_at',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
