<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/direction']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Администрация') ?>
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
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Государственные услуги') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="https://lkp-shy.dmed.kz/" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'КМИС') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/request']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Онлайн запись на прием к директору') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['codex/index']) ?>" class="main-menu__item-link">
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
        <a href="<?= \yii\helpers\Url::to(['site/non-free']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Платные услуги') ?>
            </div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/about']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'О центре') ?>
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
        <a href="<?= \yii\helpers\Url::to(['site/location']) ?>" class="main-menu__item-link">
            <div class="main-menu__item">
                <?= Yii::t('site', 'Список медицинских учреждений') ?>
            </div>
        </a>
    </div>
</div>
