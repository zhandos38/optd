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
        </div>
		<div class="direction__content">
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam1.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Кудайбергенов Ишанбай Рыскулбекович - Заместитель главного врача по лечебной 
                </div>
            </div>
            <hr>
        </div>
		<div class="direction__content">
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam2.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Нуржанов Галымжан Калмуратович - Заместитель главного врача по организационо-методической
                </div>
            </div>
            <hr>
        </div>
		<div class="direction__content">
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam3.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Капанова Карлыгаш Аширметовна - Заместитель главного врача по контролю качества медицинских
                </div>
            </div>
            <hr>
        </div>
		<div class="direction__content">
            <div class="direction__item">
                <div class="direction__image-wrapper">
                    <img src="/img/zam4.jpg" alt="direction" class="direction__image">
                </div>
                <div class="direction__description">
                    Алиев Жанғали Арапханович - Заместитель главного врача по делам экономического и административно-хозяйственного
                </div>
            </div>
            <hr>
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
        </div>
    <?php endif; ?>
</div>