<?php
use yii\helpers\Url;

/** @var $departments [] */
/** @var $department \app\models\Department */
/** @var \yii\web\View $view */

$this->title = Yii::t('site', 'Новости');
?>

<div class="buttons-group">
    <div class="back-button__wrapper">
        <a href="<?= Url::to(['news/index']) ?>" class="back-button__link">
            <div class="back-button">
                <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
            </div>
        </a>
    </div>
</div>
<div class="news-view" style="width: 100%">
    <?= $post->content ?>
</div>
