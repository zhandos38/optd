<?php

use yii\helpers\Url;

?>
<div class="buttons-group">
    <div class="back-button__wrapper">
        <a href="<?= Url::to(['site/index']) ?>" class="back-button__link">
            <div class="back-button">
                <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
            </div>
        </a>
    </div>
</div>
<div class="main-menu__item-wrapper">
    <a href="<?= Url::to(['codex/crime']) ?>" class="main-menu__item-link">
        <div class="main-menu__item">
            <?= Yii::t('site', 'Уголовный Кодекс РК') ?>
        </div>
    </a>
</div>
<div class="main-menu__item-wrapper">
    <a href="<?= Url::to(['codex/citizen']) ?>" class="main-menu__item-link">
        <div class="main-menu__item">
            <?= Yii::t('site', 'Гражданский кодекс РК') ?>
        </div>
    </a>
</div>
<div class="main-menu__item-wrapper">
    <a href="<?= Url::to(['codex/marriage']) ?>" class="main-menu__item-link">
        <div class="main-menu__item">
            <?= Yii::t('site', 'Кодекс "О браке (супружестве) и семье"') ?>
        </div>
    </a>
</div>
<div class="main-menu__item-wrapper">
    <a href="<?= Url::to(['codex/finance']) ?>" class="main-menu__item-link">
        <div class="main-menu__item">
            <?= Yii::t('site', 'Бюджетный кодекс РК') ?>
        </div>
    </a>
</div>