<div class="direction">
    <div class="buttons-group">
        <div class="go-home-button__wrapper">
            <a href="/" class="go-home-button__link">
                <div class="go-home-button">
                    <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center direction-img-trigger">
                    <img class="card-img-top director-img" src="/img/director.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            Мауленов Жаксылык Оразбайулы
                        </h5>
                        <p class="card-text">
                            <?= Yii::t('site', 'Директор городского онкологического центра') ?>
                        </p>
                        <div class="direction-working-hours" style="display: none; text-align: center">
                            <?= Yii::t('site', 'Приемные дни с личными вопросами к директору') ?> <br>
                            <?= Yii::t('site', 'Вторник') ?>: 15:00-17:00
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 40px;">
            <div class="col-md-4">
                <div class="card direction-img-trigger" style="text-align: center">
                    <img class="card-img-top zam-img" src="/img/zam1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            Жұмағали Дәулетбек Жұманұлы
                        </h5>
                        <p class="card-text">
                            <?= Yii::t('site', 'Заместитель директора по организационно-методической работе') ?>
                        </p>
                        <div class="direction-working-hours" style="display: none; text-align: center">
                            <?= Yii::t('site', 'Приемные дни') ?>:  <?= Yii::t('site', 'Каждый день') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card direction-img-trigger" style="text-align: center">
                    <img class="card-img-top zam-img" src="/img/zam2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            Рахманов Динмухамед Абдикаимович
                        </h5>
                        <p class="card-text">
                            <?= Yii::t('site', 'Заместитель директора по качеству') ?>
                        </p>
                        <div class="direction-working-hours" style="display: none; text-align: center">
                            <?= Yii::t('site', 'Приемные дни') ?>:  <?= Yii::t('site', 'Каждый день') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card direction-img-trigger" style="text-align: center">
                    <img class="card-img-top zam-img" src="/img/zam3.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            Исмаилов Самат Тастемирович
                        </h5>
                        <p class="card-text">
                            <?= Yii::t('site', 'Заместитель директора по лечебной части') ?>
                        </p>
                        <div class="direction-working-hours" style="display: none; text-align: center">
                            <?= Yii::t('site', 'Приемные дни') ?>:  <?= Yii::t('site', 'Каждый день') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$js =<<<JS
$('.direction-img-trigger').click(function () {
    $(this).find('.direction-working-hours').toggle('ease');
});
JS;

$this->registerJs($js);
?>