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
<div class="codex-view">
    <iframe src="/file/v1500011304.27-09-2019.rus.pdf" width="100%" height="1600"></iframe>
</div>