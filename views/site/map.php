<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('site', 'Расположение кабинетов');
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
<div class="site-map">
    <img src="/img/map1.jpg" style="width: 100%" alt="map">
    <img src="/img/map2.jpg" style="width: 100%" alt="map">
    <img src="/img/map3.jpg" style="width: 100%" alt="map">
    <img src="/img/map4.jpg" style="width: 100%" alt="map">
</div>
