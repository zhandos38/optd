<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buttons-group">
    <div class="go-home-button__wrapper">
        <a href="/" class="go-home-button__link">
            <div class="go-home-button">
                <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
            </div>
        </a>
    </div>
</div>
<div class="site-support">
    <h1>
        <?= Yii::t('site', 'Служба поддержки пациентов') ?>
    </h1>

    <p class="text-center" style="font-size: 24px; font-weight: bold">
        +(7252) 77-32-39 ( сенім телефоны)
        +(7252) 77-32-37 (анықтама телефоны)
    </p>
</div>
