<?php

/* @var $this \yii\web\View */

use dosamigos\chartjs\ChartJs;

$this->title = 'Главная страница';
?>
<div class="admin-default-index">
    <div class="row">
        <div class="col-md-4">
            <div style="height: 400px; width: 400px">
                <?= ChartJs::widget([
                    'type' => 'pie',
                    'id' => 'structurePie',
                    'data' => [
                        'radius' =>  "90%",
                        'labels' => ['Не решенные', 'В процессе', 'Завершены'], // Your labels
                        'datasets' => [
                            [
                                'data' => [$ratingUnsolvedQty, $ratingInProcessQty, $ratingFinishedQty], // Your dataset
                                'label' => 'Проблемы',
                                'backgroundColor' => [
                                    '#ADC3FF',
                                    '#FF9A9A',
                                    'rgba(190, 124, 145, 0.8)'
                                ],
                                'borderColor' =>  [
                                    '#fff',
                                    '#fff',
                                    '#fff'
                                ],
                                'borderWidth' => 1,
                                'hoverBorderColor'=>["#999","#999","#999"],
                            ]
                        ]
                    ],
                    'clientOptions' => [
                        'legend' => [
                            'position' => 'bottom',
                            'labels' => [
                                'fontSize' => 14,
                                'fontColor' => "#425062",
                            ]
                        ],
                        'tooltips' => [
                            'enabled' => true,
                            'intersect' => true
                        ],
                        'hover' => [
                            'mode' => false
                        ],
                        'maintainAspectRatio' => false,

                    ],
                ])
                ?>
            </div>
            <h2>Всего отзывов: <?= $ratingUnsolvedQty + $ratingInProcessQty + $ratingFinishedQty ?></h2>
        </div>
        <div class="col-md-4">
            <div style="height: 400px; width: 400px">
                <?= ChartJs::widget([
                    'type' => 'pie',
                    'id' => 'ratingPie',
                    'data' => [
                        'radius' =>  "90%",
                        'labels' => ['Хорошие оценки', 'Плохие'], // Your labels
                        'datasets' => [
                            [
                                'data' => [$ratingGood, $ratingBad,], // Your dataset
                                'label' => 'Отзывы',
                                'backgroundColor' => [
                                    '#ADC3FF',
                                    '#FF9A9A',
                                    'rgba(190, 124, 145, 0.8)'
                                ],
                                'borderColor' =>  [
                                    '#fff',
                                    '#fff',
                                    '#fff'
                                ],
                                'borderWidth' => 1,
                                'hoverBorderColor'=>["#999","#999","#999"],
                            ]
                        ]
                    ],
                    'clientOptions' => [
                        'legend' => [
                            'position' => 'bottom',
                            'labels' => [
                                'fontSize' => 14,
                                'fontColor' => "#425062",
                            ]
                        ],
                        'tooltips' => [
                            'enabled' => true,
                            'intersect' => true
                        ],
                        'hover' => [
                            'mode' => false
                        ],
                        'maintainAspectRatio' => false,

                    ],
                ])
                ?>
            </div>
            <h2>Всего хороших отзывов: <?= $ratingGood ?></h2>
            <h2>Всего плохих отзывов: <?= $ratingBad ?></h2>
        </div>
        <div class="col-md-4">
            <div style="height: 400px; width: 400px">
                <?= ChartJs::widget([
                    'type' => 'pie',
                    'id' => 'badRatingPie',
                    'data' => [
                        'radius' =>  "90%",
                        'labels' => ['Плохо проинформировали', 'Грубость', 'Компетенция'], // Your labels
                        'datasets' => [
                            [
                                'data' => [$ratingInform, $ratingPolite, $ratingCompetent], // Your dataset
                                'label' => 'Отзывы',
                                'backgroundColor' => [
                                    '#ADC3FF',
                                    '#FF9A9A',
                                    'rgba(190, 124, 145, 0.8)'
                                ],
                                'borderColor' =>  [
                                    '#fff',
                                    '#fff',
                                    '#fff'
                                ],
                                'borderWidth' => 1,
                                'hoverBorderColor'=>["#999","#999","#999"],
                            ]
                        ]
                    ],
                    'clientOptions' => [
                        'legend' => [
                            'position' => 'bottom',
                            'labels' => [
                                'fontSize' => 14,
                                'fontColor' => "#425062",
                            ]
                        ],
                        'tooltips' => [
                            'enabled' => true,
                            'intersect' => true
                        ],
                        'hover' => [
                            'mode' => false
                        ],
                        'maintainAspectRatio' => false,

                    ],
                ])
                ?>
            </div>
            <h2>Плохо проинформировали: <?= $ratingInform ?></h2>
            <h2>Грубость: <?= $ratingPolite ?></h2>
            <h2>Компетенция: <?= $ratingCompetent ?></h2>
        </div>
    </div>
</div>
