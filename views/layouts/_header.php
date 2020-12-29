<header class="header">
    <div class="container" style="display: flex; justify-content: space-between">
        <div class="row">
            <div class="symbol-wrapper col-xs-3 col-md-2">
                <img class="header__symbol" src="/img/symbol.png" alt="symbol">
            </div>
            <div class="col-xs-9 col-md-7">
                <div class="header__content">
                    <div class="header__name">
                        <?= Yii::t('site', '"Управление здравохранения города Шымкент"') ?>
                    </div>
                    <div class="header__name">
                        <?= Yii::t('site', 'Добро пожаловать в ГКП на ПХВ "Городская поликлиника №3"') ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="header__lang pull-right">
                    <?= $this->render('select-language') ?>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="chat-box">
    <button onclick="window.location.href='https://wa.me/77075539798'" type="button" id="whats-openPopup" class="whatsapp-button">
        <img class="icon-whatsapp" src="https://image.flaticon.com/icons/svg/134/134937.svg">
    </button>
</div>
