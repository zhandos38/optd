<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = Yii::t('site', 'Добавить');
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'Работники'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
