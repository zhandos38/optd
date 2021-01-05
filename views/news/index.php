<?php
use yii\helpers\Url;

/** @var $departments [] */
/** @var $department \app\models\Department */
/** @var \yii\web\View $view */

$this->title = Yii::t('site', 'Новости');
?>

<div class="buttons-group">
    <div class="go-home-button__wrapper">
        <a href="/" class="go-home-button__liEnk">
            <div class="go-home-button">
                <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
            </div>
        </a>
    </div>
</div>
<div class="news-list">
    <h1><?= $this->title ?></h1>
    <?php foreach ($posts as $post): ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <?= $post->title ?>
            </div>
            <div class="panel-footer">
                <a class="btn btn-info" href="<?= Url::to(['news/view', 'id' => $post->id]) ?>">
                    <?= Yii::t('site', 'Открыть') ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
