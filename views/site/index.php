<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/our-services']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'О нас') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/service-zone']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Территория обслуживания поликлиники') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'График работы врачей') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['static/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Нормативные правовые акты') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/support']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Служба поддержки пациентов') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'ОСМС') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/paid-services']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Платные услуги') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/direction']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Руководство') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/organization']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Правила прикрепления к организациям  ПМСП') ?></div>
        </a>
    </div>
</div>
