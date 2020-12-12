<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Position */

$this->title = Yii::t('site', 'Добавить');
$this->params['breadcrumbs'][] = ['label' => Yii::t('site', 'Должности'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="position-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
