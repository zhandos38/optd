<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Position */

$this->title = Yii::t('site', 'Обновить: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'Позиция'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('site', 'Обновить');
?>
<div class="position-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
