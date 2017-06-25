<?php use yiier\chartjs\ChartJs; ?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel tile fixed_height_320" style="min-height: 900px">
        <div class="x_title">
            <h2>Статистика по типам задач</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <?= ChartJs::widget([
                'type' => 'line',
                'options' => [
                    'height' => 200,
                    'width' => 600
                ],
                'data' => [
                    'labels' => ["January", "February", "March", "April", "May", "June", "July"],
                    'datasets' => [
                        [
                            'label'=> '# of Votes',
                            'data' => [65, 59, 90, 81, 56, 55, 40]
                        ],
                        [
                            'label'=> '# of Votes',
                            'data' => [28, 48, 40, 19, 96, 27, 100]
                        ]
                    ]
                ]
            ]);?>

        </div>
    </div>
</div>