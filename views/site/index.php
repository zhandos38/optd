<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'График работы врачей') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/admission']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Пациенты') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/history']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'История ОПТД') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/our-services']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Наши услуги') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'ОСМС') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/direction']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Администрация') ?>
            </div>
        </a>
    </div>
</div>
