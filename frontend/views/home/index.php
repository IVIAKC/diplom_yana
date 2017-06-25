<?php use common\models\extended\Issue;
use common\models\extended\Project;
use yiier\chartjs\ChartJs;

\frontend\assets\AppAsset::register($this);
?>

<div class="col-md-12 col-sm-12 col-xs-12">
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
                    <th>День выполнения</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0 ;foreach (Issue::getAllArray(Issue::TYPE_SOMEONE,Yii::$app->user->id) as $item): $i++;
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $item->summary ?></td>
                        <td width="25px"><?= $item->priority->getColorView() ?></td>
                        <td><?= $item->type->name ?></td>
                        <td><?= $item->status->name ?></td>
                        <td><?= $item->assignee->username ?></td>
                        <td><?= !empty($item->duedate) ?date('Y-m-d',strtotime($item->duedate)) : ''?></td>
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
                <?php $i = 0 ;foreach (Project::getAllArray(Project::TYPE_SOMEONE,Yii::$app->user->id) as $item): $i++;
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $item->name ?></td>
                        <td width="25px"><?= $item->priority->getColorView() ?></td>
                        <td><?= !empty($item->type)?$item->type->name :''?></td>
                        <td><?= $item->status->name ?></td>
                        <td><?= $item->lead->username ?></td>
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
            <h2>Статистика по задачам</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Тип</th>
                    <th>Количество</th>

                </tr>
                </thead>
                <tbody>
                <?php $i = 0 ; foreach (Issue::getAllForType() as $type => $count): $i++;
                    ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $type ?></td>
                        <td ><?= $count ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
