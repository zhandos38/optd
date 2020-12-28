<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Facility */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facility-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_hours')->textInput(['maxlength' => true]) ?>

    <div>
        <label>Укажите адрес объекта на карте</label>
        <div id="map" style="width: 100%; height: 400px; margin-bottom: 15px"></div>
        <div class="row">
            <div class="col-xs-6">
                <?= $form->field($model, 'lat')->textInput(['id' => 'lat', 'readonly'=> true]) ?> <br/>
            </div>
            <div class="col-xs-6">
                <?= $form->field($model, 'lng')->textInput(['id' => 'lng', 'readonly'=> true]) ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
$this->registerJsFile('@web/js/map.js');
?>