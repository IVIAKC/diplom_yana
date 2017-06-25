<?php use yiier\chartjs\ChartJs; ?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel tile ">
        <div class="x_title">
            <h2>Статистика по статусам задач</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <?= ChartJs::widget([
                'type' => 'line',
                'options' => [
                    'height' => 200,
                    'width' => 600
                ],
                'data' =>
                    [
                        'labels' => $labels,
                        'datasets' => $datesets
                    ]
            ]); ?>

        </div>
    </div>
</div>
