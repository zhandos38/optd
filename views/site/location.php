<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = Yii::t('site', 'Расположение объектов');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buttons-group">
    <div class="go-home-button__wrapper">
        <a href="/" class="go-home-button__link">
            <div class="go-home-button">
                <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
            </div>
        </a>
    </div>
</div>
<div class="site-location">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <div id="map"></div>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="map-list-wrapper">
                <div class="map-list list-group">
                    <?php foreach ($marks as $mark): ?>
                        <a class="map-item list-group-item" href="#" data-id="<?= $mark['id'] ?>">
                            <div class="map-item__name">
                                <?= $mark['properties']['name'] ?>
                            </div>
                            <div class="map-item__address">
                                <i class="fa fa-map-marker"></i> <b>Адрес:</b> <?= $mark['properties']['address'] ?>
                            </div>
                            <div class="map-item__working-hours">
                                <i class="fa fa-clock"></i> <b>Время работы:</b> <?= $mark['properties']['workingHours'] ?>
                            </div>
                            <div class="map-item__working-hours">
                                <i class="fa fa-phone"></i> <b>Номера телефонов:</b> <?= $mark['properties']['phone'] ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$marks = \yii\helpers\Json::encode($marks);
$js =<<<JS
if(typeof ymaps !== 'undefined'){
    ymaps.ready(init);
}

function init () {
    let marks = $marks;
    let geolocation = ymaps.geolocation,
    myMap = new ymaps.Map("map", {
            center: [42.330186, 69.592237],
            zoom: 13,
            controls: []
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterIconLayout: "default#pieChart"
        });
    
    objectManager.add(marks);
    /* Добавления objectManager на карту */
    myMap.geoObjects.add(objectManager);
    
    $(document).on('click', '.map-item', function() {
        let objectId = $(this).data('id');
        // let coordinates = objectManager.objects.getById(id).geometry.coordinates;
        let geoObject = objectManager.objects.getById(objectId);
        myMap.setCenter(geoObject.geometry.coordinates, 17, {duration: 300})
        .then(function () {
          // objectManager.objects.balloon.open(objectId);
        });
        // $(this).siblings().removeClass('map-pharmacy__active');
        // $(this).addClass('map-pharmacy__active');
        // myMap.setCenter(coordinates, 17, {duration: 300});
        // console.log('Bulding coords: ' + coordinates);
    });
    
        // Сравним положение, вычисленное по ip пользователя и
        // положение, вычисленное средствами браузера.
        geolocation.get({
            provider: 'auto',
            mapStateAutoApply: true
        }).then(function (result) {
            // Красным цветом пометим положение, вычисленное через ip.
            result.geoObjects.options.set('preset', 'islands#redCircleIcon');
            result.geoObjects.get(0).properties.set({
                balloonContentBody: 'Мое местоположение<br>',
            });
            myMap.geoObjects.add(result.geoObjects);

            // let coords = result.geoObjects.get(0).geometry.getCoordinates();
            // let userCoords = coords;
        });
}
JS;

$this->registerJsFile('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
$this->registerJs($js);
?>