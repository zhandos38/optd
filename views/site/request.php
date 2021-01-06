<?php
$this->title = 'Запись к директору';

use yii\widgets\ActiveForm; ?>
<div class="buttons-group">
    <div class="back-button__wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="back-button__link">
            <div class="back-button">
                <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
            </div>
        </a>
    </div>
</div>
<div class="request-view">
    <?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'message')->textarea() ?>

    <?= \yii\helpers\Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>

    <?php ActiveForm::end() ?>
</div>