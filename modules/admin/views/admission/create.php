<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admission */

$this->title = 'Создать запись';
$this->params['breadcrumbs'][] = ['label' => 'Поступление', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
