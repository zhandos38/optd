<?php

use app\models\Position;
use yii\bootstrap\Modal;
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
                    return !empty($model->position) ? $model->position->name  : 'Не указано';
                },
                'filter' => ArrayHelper::map(Position::find()->asArray()->all(), 'id', 'name')
            ],
            [
                'attribute' => 'department_id',
                'value' => function(Employee $model) {
                    return !empty($model->department) ? $model->department->name : 'Не указано';
                },
                'filter' => ArrayHelper::map(Department::find()->asArray()->all(), 'id', 'name')
            ],
            'cabinet',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{qrcode} {view} {update} {delete}',
                'buttons' => [
                    'qrcode' => function ($url, $model, $key) {
                        return Html::button('<span class="fa fa-image"></span>', [
                            'class' => 'employee-qrcode-btn btn btn-info',
                            'data-id' => $model->id
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
<?php
Modal::begin([
    'header' => '<h4>QrCode</h4>',
    'id' => 'modal-qrcode',
    'size' => 'modal-sm'
]);

echo '<div id="modal-qrcode__content"></div>';

Modal::end();

$js =<<<JS
$('.employee-qrcode-btn').on('click', function() {
    $('#modal-qrcode').modal('show')
    .find('#modal-qrcode__content')
    .load('/ru/admin/employee/get-qrcode', {id: $( this ).data('id')});
});
JS;

$this->registerJs($js);
?>
