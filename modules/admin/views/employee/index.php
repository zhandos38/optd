<?php

use app\models\Position;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Employee;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('site', 'Работники');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <p>
        <?= Html::a(Yii::t('site', 'Добавить'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'full_name',
            [
                'attribute' => 'position_id',
                'value' => function(Employee $model) {
                    return $model->position->name;
                },
                'filter' => ArrayHelper::map(Position::find()->asArray()->all(), 'id', 'name')
            ],
            [
                'attribute' => 'department_id',
                'value' => function(Employee $model) {
                    return $model->department->name;
                },
                'filter' => ArrayHelper::map(Department::find()->asArray()->all(), 'id', 'name')
            ],
            'cabinet',
            [
                'attribute' => 'created_at',
                'value' => function(Employee $model) {
                    return date('d-m-Y H:i', $model->created_at);
                },
                'filter' => false
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
