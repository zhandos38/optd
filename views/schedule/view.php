<?php

/** @var \app\models\Department $department */
/** @var \yii\web\View $view */

$this->title = 'График работы';
?>
<div class="buttons-group">
    <div class="go-home-button__wrapper">
        <a href="<?= \yii\helpers\Url::to(['schedule/index']) ?>" class="go-home-button__liEnk">
            <div class="go-home-button">
                <i class="fas fa-home"></i> <?= Yii::t('site', 'Назад') ?>
            </div>
        </a>
    </div>
</div>
<div class="schedule-view w-100">
    <h1><b>График работы:</b> <?= $department->name ?></h1>
    <?= $department->schedule ?>
</div>