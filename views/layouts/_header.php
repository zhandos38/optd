<header class="header">
    <div class="container" style="display: flex; justify-content: space-between">
        <div class="row">
            <div class="col-md-2">
                <img class="header__symbol" src="/img/symbol.png" alt="">
            </div>
        </div>
        <div class="col-md-7">
            <div class="header__content">
                <div class="header__name">
                    <?= Yii::t('site', '"Управление здравохранения города Шымкент"') ?>
                </div>
                <div class="header__name">
                    <?= Yii::t('site', 'Добро пожаловать в ГКП на ПХВ "Городская поликлиника №3"') ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="header__lang pull-right">
                <?= $this->render('select-language') ?>
            </div>
        </div>
    </div>
</header>
