<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'График работы врачей') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['admission']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Пациенты') ?></div>
        </a>
    </div>
</div>
