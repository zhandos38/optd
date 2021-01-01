<?php

/* @var $this \yii\web\View */

use dosamigos\chartjs\ChartJs;

$this->title = 'Главная страница';
?>
<div class="admin-default-index">
    <h1>Проблемы:</h1>
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
        ]);
        ?>
    </div>
</div>
