<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Facility */

$this->title = 'Добавить объект';
$this->params['breadcrumbs'][] = ['label' => 'Facilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="facility-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
