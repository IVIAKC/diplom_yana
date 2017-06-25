<?php use common\models\extended\Issue; ?>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>Задачи</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <!--            Все задачи-->
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Приоритет</th>
                    <th>Тип</th>
                    <th>Статус</th>
                    <th>Ответственный</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0 ;foreach (Issue::getAllArray() as $issue): $i++;
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $issue->summary ?></td>
                        <td width="25px"><?= $issue->priority->getColorView() ?></td>
                        <td><?= $issue->type->name ?></td>
                        <td><?= $issue->status->name ?></td>
                        <td><?= $issue->assignee->username ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>Проекты</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">


        </div>
    </div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>Статистика по задачам</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <h4>App Usage across versions</h4>


        </div>
    </div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>Количество задач по проектам</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <h4>App Usage across versions</h4>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>0.1.5.2</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>123k</span>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>0.1.5.3</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>53k</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>0.1.5.4</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>23k</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>0.1.5.5</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>3k</span>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
                <div class="w_left w_25">
                    <span>0.1.5.6</span>
                </div>
                <div class="w_center w_55">
                    <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="w_right w_20">
                    <span>1k</span>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>