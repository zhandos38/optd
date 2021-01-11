<?php
use yii\helpers\Url;

/** @var $departments [] */
/** @var $department \app\models\Department */
/** @var \yii\web\View $view */

$this->title = 'Список врачей';
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
<div class="employee-list">
    <?php foreach ($departments as $department): ?>
        <div class="employee-list__item-wrapper">
            <a href="<?= $department->children ? Url::to(['employee/index', 'id' => $department->id]) : Url::to(['employee/list', 'id' => $department->id]) ?>" class="employee-list__item-link">
                <div class="employee-list__item"><?= $department->getName() ?></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
