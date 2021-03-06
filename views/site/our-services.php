<div class="our-services">
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
    <div class="our-services__name">
        Наши услуги
    </div>
    <div class="our-services__content">
        <p>
            Противотуберкулезный диспансер оказывает гарантированный объем
            бесплатной медицинской помощи населению по выявлению, диагностике и лечению туберкулеза.
        </p>
        <p>
            В рентгено-диагностическом отделении проводятся следующие виды обследования:
        </p>
        <ul>
            <li>рентгенография органов грудной клетки</li>
            <li>рентгеноскопия органов грудной клетки</li>
            <li>рентгенологические исследования костно-суставной системы, спондилография</li>
            <li>томография легких</li>
            <li>урография мочеполовой системы с контрастом</li>
            <li>сальпингография с контрастом</li>
            <li>фистулография с контрастом</li>
        </ul>
        <p>
            В отделении ультразвукового исследования:
        </p>
        <ul>
            <li>ультразвуковая диагностика щитовидной железы, молочной железы,</li>
            <li>поверхностных лимфатических узлов, брюшной полости (поджелудочной железы,</li>
            <li>печени, желчного пузыря, селезенки)</li>
            <li>УЗИ органов забрюшинного пространства (почки, надпочечники)</li>
            <li>УЗИ органов грудной клетки (плевральной полости)</li>
            <li>эхокардиография</li>
            <li>УЗИ органов малого таза у женщин, предстательной железы у мужчин</li>
        </ul>
        <p>
            В кабинете функциональной диагностики:
        </p>
        <ul>
            <li>ЭКГ</li>
            <li>спирометрия</li>
            <li>суточное мониторирование артериального давления (СМАД)</li>
        </ul>
        <p>
            В кабинете эндоскопии:
        </p>
        <ul>
            <li>фибробронхоскопия</li>
            <li>фиброгастродуоденоскопия</li>
            <li>эндотрахеальные вливания</li>
        </ul>
        <p>
            В кабинете физиолечения:
        </p>
        <ul>
            <li>УВЧ терапия</li>
            <li>ингаляция</li>
            <li>ультразвук</li>
            <li>электрофорез</li>
        </ul>
    </div>
    <?php else: ?>
        <div class="our-services__name">
            Біздің қызметтер
        </div>
        <div class="our-services__content">
            <p>
                Рентген-диагностикалық бөлімшеде мынандай тексерулер түрі өткізіледі:
            </p>
            <ul>
                <li>кеуде қуысы органдарының рентгенографиясы</li>
                <li>кеуде қуысы органдарының рентгеноскопиясы</li>
                <li>сүйек – буын жүйесін рентгенологиялық зерттеу, спондилография</li>
                <li>өкпе томографиясы</li>
                <li>зәр шығару жүйесінің айқындылық урографиясы</li>
                <li>қарама –қарсылық сальпингографиясы</li>
                <li>айқындылық фистулографиясы</li>
            </ul>
            <p>
                Ультра дыбыстық зерттеу бөлімшесінде зерттеудің келесі түрі жүргізіледі:
            </p>
            <ul>
                <li>қалқанша безге, сүт бездеріне, лимфа түйіндерінің жоғарғы жағына, іш қуысының (ұйқы безіне, бауырға, өтқалтасына, көкбауырға)ультра дыбыстық зерттеу;</li>
                <li>іш қуысы кеңістігіндегі органдарды(бүйрек) УДЗ</li>
                <li>кеуде қуысы органдарының(плевральді қуыс) УДЗ</li>
                <li>эхокардиография</li>
                <li>Уәйелдердің кіші жамбас ағзаларын, еркектердің қуыс бездерін УДЗ</li>
            </ul>
            <p>
                Функциональдық диагностика кабинетінде:
            </p>
            <ul>
                <li>ЭКГ</li>
                <li>спирометрия</li>
                <li>күре тамыр қысымын(СМАД) тәуліктік мониторлеу</li>
            </ul>
            <p>
                Эндоскопия кабинетінде:
            </p>
            <ul>
                <li>фибробронхоскопия</li>
                <li>фиброгастродуоденоскопия</li>
                <li>эндотрахеальды құю</li>
            </ul>
            <p>
                Физиоемдеу кабинетінде:
            </p>
            <ul>
                <li>УВЧ терапиясы</li>
                <li>ингаляция</li>
                <li>ультразвук</li>
                <li>электрофорез</li>
            </ul>
        </div>
    <?php endif; ?>
</div>