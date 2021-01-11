<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_kz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_duty')->checkbox() ?>

    <?= $form->field($model, 'is_staff')->checkbox() ?>

    <?= $form->field($model, 'order')->input('number') ?>

    <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(\app\models\Department::find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Укажите отделение']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
