<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-md-4">
        <div class="admission-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true, 'placeholder' => 'Введите имя и фамилию']) ?>

            <?= $form->field($model, 'status')->dropDownList(
                [
                    0 => 'Госпитализирован',
                    1 => 'Отказ от госпитализации',
                    2 => 'Переведен'
                ],
                [
                    'prompt' => 'Укажите статус'
                ]
            ) ?>

            <?= $form->field($model, 'type')->dropDownList(
                [
                    0 => 'Плановый',
                    1 => 'Экстренный',
                    2 => 'Неотложенный'
                ],
                [
                    'prompt' => 'Укажите тип'
                ]
            ) ?>

            <?= $form->field($model, 'department_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Department::find()->all(), 'id', 'name'), [
                    'prompt' => 'Выберите отделение'
            ]) ?>

            <?= $form->field($model, 'room')->textInput() ?>

            <?= $form->field($model, 'is_discharged')->checkbox() ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
