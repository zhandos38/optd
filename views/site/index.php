<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
	<div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/direction']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Территория обслуживание поликлиники') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'График работы') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Врачи поликлинки') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/history']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Расположение кабинетов') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/our-services']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Служба поддержки пациентов') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Государственные услуги') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Нормативно-правовые акты') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Бесплатные лекартсвенное обеспечение') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Платные услуги') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'О поликлинике') ?>
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
</div>
