<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
    <div class="buttons-group">
        <div class="go-home-button__wrapper">
            <a href="/" class="go-home-button__link">
                <div class="go-home-button">
                    <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
                </div>
            </a>
        </div>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/guarantee']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'ГОБМП') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/health-codex']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Кодекс здоровья') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/disease']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Перечень социально значимых заболеваний') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/ambulance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Правила оказания скорой медицинской помощи') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/inspection']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Проф.осмотр') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/medicine-help']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Правил оказания стационарной помощи') ?></div>
        </a>
    </div>
</div>
