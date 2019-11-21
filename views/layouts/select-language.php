<?php

use yii\bootstrap\Html;

if(\Yii::$app->language == 'ru'):
    echo Html::a('Қазақшаға ауыстыру', array_merge(
            \Yii::$app->request->get(),
            [\Yii::$app->controller->route, 'language' => 'kz']
        ),
        [
            'class' => 'select-lang__link'
        ]);
else:
    echo Html::a('Перейти на русский', array_merge(
                \Yii::$app->request->get(),
                [\Yii::$app->controller->route, 'language' => 'ru']
            ),
        [
            'class' => 'select-lang__link'
        ]);
endif;