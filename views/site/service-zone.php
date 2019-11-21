<div class="service-zone">
    <div class="buttons-group">
        <div class="go-home-button__wrapper">
            <a href="/" class="go-home-button__link">
                <div class="go-home-button">
                    <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
                </div>
            </a>
        </div>
        <div class="back-button__wrapper">
            <a href="<?= \yii\helpers\Url::to(['static/index']) ?>" class="back-button__link">
                <div class="back-button">
                    <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
                </div>
            </a>
        </div>
    </div>
    <?php if (Yii::$app->language == 'ru'): ?>
        <div class="service-zone__name">
            Территория обслуживания поликлиники
        </div>
        <div class="service-zone__content">
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Территория обслуживания поликлиники</p>
            <p>ГКП «Городская поликлиника №7» была открыта 9 марта 2011 года по программе «100 школ, 100 больниц» Первого Президента Республики Казахстан Н.Назарбаева.</p>
            <p>Поликлиника рассчитана на 500 посещений в смену.</p>
            <p>Всего 10ВА и 10MП.</p>
            <p>&nbsp;</p>
            <p>Поликлиника обслуживает население 15 населенных пунктов:</p>
            <table border="1" cellpadding="0" cellspacing="0" width="536">
                <tbody>
                <tr>
                    <td valign="top" width="50%">
                        <p>-мкр.Онтустик&nbsp;</p>
                        <p>&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Елтай</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Карабастау &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Маятас-1</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Жалын &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Маятас-2</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Откорм совхоз Бадам &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Жыланбузган</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Бадам-1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Тогус</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Бадам-2 &nbsp; &nbsp; &nbsp;&nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Айнатас</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Каракия &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Орманшы</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Каратобе &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        <p>&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Текесу</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Алтынбастау</p>
                        <p>&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
        </div>
    <?php elseif (Yii::$app->language == 'kz'): ?>
        <div class="service-zone__name">
            Емхананың қызмет көрсету аймағы
        </div>
        <div class="service-zone__content">
            <p>&nbsp;</p>
            <p>Емхананың қызмет көрсету аймағы</p>
            <p>«№7 қалалық емханасы» МКК 2011 жылы 9-наурызда Қазақстан Республикасының тұңғыш президенті Н.Назарбаевтың «100 мектеп, 100 аурухана» бағдарламасына негізделіп ашылған.&nbsp;</p>
            <p>Типтік емхана бір ауысымда 500 адам қабылдауға есептелген.&nbsp;</p>
            <p>Барлығы 10ДА және 10 МТ бар.</p>
            <p>&nbsp;</p>
            <p>Емхана 15 елді-мекеннің халқына қызмет көрсетеді:</p>
            <p>&nbsp;</p>
            <table border="1" cellpadding="0" cellspacing="0" width="536">
                <tbody>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Оңтүстік м/а</p>
                        <p>&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Елтай</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Қарабастау &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Маятас-1</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Жалын &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Маятас-2</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Откорм совхоз Бадам &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Жыланбұзған</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Бадам-1 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Тоғыс</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Бадам-2 &nbsp; &nbsp; &nbsp;&nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Айнатас</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Қарақия &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Орманшы</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Қаратөбе &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        <p>&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>-Текесу</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="50%">
                        <p>-Алтынбастау</p>
                        <p>&nbsp;</p>
                    </td>
                    <td valign="top" width="50%">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </td>
                </tr>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    <?php endif; ?>
</div>