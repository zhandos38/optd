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
    <p class="text-center" style="font-size: 24px;">
        +(7252) 77-32-39 ( сенім телефоны) <br>
        +(7252) 77-32-37 (анықтама телефоны)
    </p>
    <h1>
        <?= Yii::t('site', 'Если у вас возникнут жалобы обращайтесь по указанному номеру') ?>
    </h1>
    <p class="text-center" style="font-size: 24px;">
        <i class="fab fa-whatsapp-square text-success"></i> <i class="fa fa-phone-square text-info"></i>  +8(775) 719-13-79 <br>
        <i class="fab fa-whatsapp-square text-success"></i> <i class="fa fa-phone-square text-info"></i>  +8(701) 404-04-77 <br>
    </p>
</div>
