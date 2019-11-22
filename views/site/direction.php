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
    <?php if (Yii::$app->language == 'ru'): ?>
        <div class="direction__name">
            Администрация
        </div>
        <div class="direction__content">
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/doctor.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Главный врач – Сагимбеков Болатхан Салибекович  05.03.1962 г.р. закончил Алматинский государственный медицинский институт 1985 г. лечебное дело, кандидат медицинсий наук, стаж 29 лет
                </div>
            </div>
            <hr>
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam-doctor.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Заместитель главного врача по лечебно-профилактической работе – Косыбаева Чырын Жабыковна 01.09.1970 г.р. закончила Карагандиский государственный медицинский институт 1993 г. лечебное дело, стаж 20 лет.
                </div>
            </div>
            <hr>
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam-doctor2.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Заместитель главного врача по качеству – Сейтханов Мухитдин Абуович 10.12.1964 г.р. закончил Актюбинский государственный медицинский институт1993 г. лечебное дело, стаж 26 лет.
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="direction__name">
            Әкімшілік
        </div>
        <div class="direction__content">
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/doctor.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Бас дәрігер – Сағымбеков Болатхан Салыбекович  05.03.1962 ж.т.  1985 ж. Алматы мемлекеттік медицина институтының емдеу ісі мамандығын бітірген.Медицина ғылымдарының кандидаты, жұмыс өтілі 29 жыл
                </div>
            </div>
            <hr>
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam-doctor.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Бас дәрігердің емдеу-профилактикалық  жұмыстары бойынша орынбасары – Қосыбаева Шырын Жабыковна  01.09.1970 ж.т.  1993 ж. Қарағанды мемлекеттік медицина институтының емдеу ісі мамандығын бітірген, жұмыс өтілі 20 жыл
                </div>
            </div>
            <hr>
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam-doctor2.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Бас дәрігердің медицина сапасын бақылау жұмыстары бойынша орынбасары – Сейтханов Мухитдин Әбуович  10.12.1964 ж.т.  1993 ж. Ақтөбе мемлекеттік медицина институтының емдеу ісі мамандығын бітірген, жұмыс өтілі 26 жыл
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>