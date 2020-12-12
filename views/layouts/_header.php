<header class="header">
    <div class="container" style="display: flex; justify-content: space-between">
        <div>
            <img class="header__symbol" src="/img/symbol.png" alt="">
        </div>
        <div class="header__content">
            <div class="header__name">
                <?= Yii::t('site', '"Управление здравохранения города Шымкент"') ?>
            </div>
            <div class="header__name">
                <?= Yii::t('site', 'Добро пожаловать в ГКП на ПХВ "Городская поликлиника №3"') ?>
            </div>
        </div>
        <div class="header__lang">
            <?= $this->render('select-language') ?>
        </div>
    </div>
</header>
