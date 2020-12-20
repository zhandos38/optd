<?php
use yii\helpers\Url;

/** @var \app\models\Employee $models */
/** @var \app\models\Employee $model */
/** @var \yii\web\View $view */

$this->title = 'График врачей';
?>

<div class="buttons-group">
    <div class="back-button__wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="back-button__link">
            <div class="back-button">
                <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
            </div>
        </a>
    </div>
</div>
<div class="employee-list">
    <?php foreach ($models as $model): ?>
        <div class="employee-list__item-wrapper">
            <a href="<?= Url::to(['employee/view', 'id' => $model->id]) ?>" class="employee-list__item-link">
                <div class="employee-list__item"><?= $model->full_name ?> - <b><?= $model->position ? $model->position->getName() : '' ?></b></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
