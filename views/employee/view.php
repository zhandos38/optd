<?php

use yii\helpers\Url;
use yii\web\JsExpression;
use yii\helpers\Html;
/* @var $model \app\models\Employee */
/* @var $this \yii\web\View */

$this->title = 'График врача';
?>
<style>
    #mlkeyboard {
        position: fixed;
        bottom: 0;
    }
</style>
<div class="employee-card">
    <div class="buttons-group">
        <div class="go-home-button__wrapper">
            <a href="/" class="go-home-button__link">
                <div class="go-home-button">
                    <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
                </div>
            </a>
        </div>
        <div class="back-button__wrapper">
            <a href="<?= Url::to(['employee/list', 'id' => $model->department_id]) ?>" class="back-button__link">
                <div class="back-button">
                    <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
                </div>
            </a>
        </div>
    </div>
    <div class="employee-card__info-wrapper">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <img src="/img/employee/<?= $model->image ?>" alt="<?= $model->image ?>" class="employee-card__image">
            </div>
            <div class="col-md-8">
                <div class="employee-card__info">
                    <div class="employee-card__full-name">
                        <?= $model->full_name ?>
                    </div>
                    <div class="employee-card__position">
                        <?= $model->position->name ?>
                    </div>
                    <div class="employee-card__cabinet">
                        <?= Yii::t('site', 'Кабинет') ?> <?= $model->cabinet ?>
                    </div>
                    <div class="employee-card__schedule">
                        <?php if (!Yii::$app->devicedetect->isMobile()): ?>
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th><?= Yii::t('site', 'Понидельник') ?></th>
                                    <th><?= Yii::t('site', 'Вторник') ?></th>
                                    <th><?= Yii::t('site', 'Среда') ?></th>
                                    <th><?= Yii::t('site', 'Четверг') ?></th>
                                    <th><?= Yii::t('site', 'Пятница') ?></th>
                                    <th><?= Yii::t('site', 'Суббота') ?></th>
                                    <th><?= Yii::t('site', 'Воскресенье') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th><?= $model->monday ? $model->friday : 'Не указано' ?></th>
                                    <th><?= $model->tuesday ? $model->tuesday : 'Не указано' ?></th>
                                    <th><?= $model->wednesday ? $model->wednesday : 'Не указано' ?></th>
                                    <th><?= $model->thursday ? $model->thursday : 'Не указано' ?></th>
                                    <th><?= $model->friday ? $model->friday : 'Не указано' ?></th>
                                    <th><?= $model->saturday ? $model->saturday : 'Выходной' ?></th>
                                    <th><?= $model->sunday ? $model->sunday : 'Выходной' ?></th>
                                </tr>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <ul>
                                <li><?= Yii::t('site', 'Понидельник') ?>: <?= $model->monday ? $model->monday : 'Не указано' ?></li>
                                <li><?= Yii::t('site', 'Вторник') ?>: <?= $model->tuesday ? $model->tuesday : 'Не указано' ?></li>
                                <li><?= Yii::t('site', 'Среда') ?>: <?= $model->wednesday ? $model->wednesday : 'Не указано' ?></li>
                                <li><?= Yii::t('site', 'Четверг') ?>: <?= $model->thursday ? $model->thursday : 'Не указано' ?></li>
                                <li><?= Yii::t('site', 'Пятница') ?>: <?= $model->friday ? $model->friday : 'Не указано' ?></li>
                                <li><?= Yii::t('site', 'Суббота') ?>: <?= $model->saturday ? $model->saturday : 'Выходной' ?></li>
                                <li><?= Yii::t('site', 'Воскресенье') ?>: <?= $model->saturday ? $model->saturday : 'Выходной' ?></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rating-form__wrapper">
        <h2>
            Оставить оценку
        </h2>
        <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'rating-form']) ?>

            <?= $form->field($ratingModel, 'value')->widget(\kartik\rating\StarRating::className(), [
                'pluginOptions' => [
                    'stars' => 5,
                    'min' => 0,
                    'max' => 5,
                    'step' => 1,
                    'filledStar' => '<i class="glyphicon glyphicon-heart"></i>',
                    'emptyStar' => '<i class="glyphicon glyphicon-heart-empty"></i>',
                    'defaultCaption' => '{rating}',
                    'starCaptions' => [
                        0 => Yii::t('site', 'Просто ужасно'),
                        1 => Yii::t('site', 'Очень плохо'),
                        2 => Yii::t('site', 'Плохо'),
                        3 => Yii::t('site', 'Удовлетворительно'),
                        4 => Yii::t('site', 'Хорошо'),
                        5 => Yii::t('site', 'Отлично')
                    ],
                ]
        ]) ?>

        <div id="extra-questions-block" class="row" style="display: none">
            <div class="col-md-6">
                <?= $form->field($ratingModel, 'is_inform_good')->checkbox() ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($ratingModel, 'is_polite_enough')->checkbox() ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($ratingModel, 'is_competent_enough')->checkbox() ?>
            </div>
        </div>

        <?= $form->field($ratingModel, 'comment')->textarea() ?>
		
		<div class="row">
			<div class="col-md-6">
			    <?= $form->field($ratingModel, 'iin')->textInput(['id' => 'rating-form-iin']) ?>
			</div>
			<div class="col-md-6">
			    <?= $form->field($ratingModel, 'customer_name')->textInput(['id' => 'rating-form-customer']) ?>
			</div>
	
		</div>

        <div id="res"></div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('site', 'Отправить'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php \yii\widgets\ActiveForm::end() ?>

    </div>
</div>
<?php
$js =<<<JS

$('form#rating-form').on('beforeSubmit', function(e) {
        let ch = $('#rating-form-iin').val();
        let res = iin(ch);
        
        if(ch.length !== 12) 
        {
            $('#res').html('<font color="red">Длина РНН/ИНН должна быть 12 символов</font>');
            return false;
        }
        
        if(! /^\d+$/.test(ch))
        {
            $('#res').html('<font color="red">В ИНН содержатся только цифры</font>');
            return false;    
        }
        
        if ( !res[0] )
        {
            $('#res').html(res[1]);
            return false;
        }
});



function iin(iin)
{
    let s = 0, i, k, t;
    let nn = iin.split('');
    for (i = 0; i < 11; i++)
    {
        s = s + (i + 1) * nn[i];
    }
    k = s % 11;
    if (k == 10)
    {
        s = 0;
        for (i = 0; i < 11; i++)
        {
            t = (i + 3) % 11;
            if(t == 0)
            {
                t = 11;
            }
            s = s + t * nn[i];
        }
        k = s % 11;
        if (k == 10)
            return [false, '<font color="red">ИИН не должен использоваться, ошибки при формировании контрольного разряда</font>'];
        return [(k == iin.substr(11, 1)), '<font color="red">Контрольный разряд ИИН неверный, должно быть ' + k + ', а стоит ' + iin.substr(11, 1) +'</font>' ];
    }
    return [(k == iin.substr(11, 1)), '<font color="red">Контрольный разряд ИИН неверный, должно быть ' + k + ', а стоит ' + iin.substr(11, 1) +'</font>'];    
}

$('#rating-value').change(function() {
  let rating = parseInt($(this).val());
  if (rating <= 3) {
      $('#extra-questions-block').show('ease');
  } else {
      $('#extra-questions-block').hide('ease');
  }
});
JS;

$jsKeyboard =<<<JS
$(document).ready(function(){
  $('#rating-comment').mlKeyboard({
    layout: 'ru_RU'
  });
});
$(document).ready(function(){
  $('#rating-form-iin').mlKeyboard({
    layout: 'ru_RU',
    active_shift: false
  });
});
$(document).ready(function(){
  $('#rating-form-customer').mlKeyboard({
    layout: 'ru_RU'
  });
});
JS;

$this->registerJs($js);
if (!Yii::$app->devicedetect->isMobile()) {
    $this->registerJs($jsKeyboard);
}
?>
