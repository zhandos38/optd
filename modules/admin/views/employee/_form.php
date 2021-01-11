<?php

use kartik\file\FileInput;
use vova07\imperavi\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Position;
use app\models\Department;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_id')->dropDownList(ArrayHelper::map(Position::find()->asArray()->all(), 'id', 'name'), [
        'prompt' => 'Выберите должность'
    ]) ?>

    <?= $form->field($model, 'department_id')->dropDownList(ArrayHelper::map(Department::find()->asArray()->all(), 'id', 'name'), [
        'prompt' => 'Выберите должность'
    ]) ?>

    <?= $form->field($model, 'cabinet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>
	
	<?= $form->field($model, 'monday')->textInput() ?>
	<?= $form->field($model, 'tuesday')->textInput() ?>
	<?= $form->field($model, 'wednesday')->textInput() ?>
	<?= $form->field($model, 'thursday')->textInput() ?>
	<?= $form->field($model, 'friday')->textInput() ?>
	<?= $form->field($model, 'saturday')->textInput() ?>
	<?= $form->field($model, 'sunday')->textInput() ?>

	<?= $form->field($model, 'description')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'plugins' => [
                'clips',
                'fullscreen'
            ],
            'clips' => [
                ['Lorem ipsum...', 'Lorem...'],
                ['red', '<span class="label-red">red</span>'],
                ['green', '<span class="label-green">green</span>'],
                ['blue', '<span class="label-blue">blue</span>'],
            ],
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
