<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $data array | bool */
/* @var $model common\models\extended\Project */


$this->title = 'Проекты';
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать проект', false, ['class' => 'btn btn-success', 'id' => 'modal-btn', 'data-target'=>"/report/create"]) ?>
    </p>
<!--    <table class = "table table-hover">-->
<!--<!--        TODO Сделать универсальную bootstrap таблицу-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Название</th>-->
<!--            <th>Заказчик</th>-->
<!--            <th>Кол-во задач</th>-->
<!--            <th>Адрес</th>-->
<!--            <th>Бюджет</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--            --><?php //if($data): ?>
<!--                --><?php //foreach ($data as $item): ?>
<!--                    <tr>-->
<!--                        <th>--><?//= $item['name'] ?><!--</th>-->
<!--                        <th>--><?//= $item['client_id'] ?><!--</th>-->
<!--                        <th>Тут кол-во задач</th>-->
<!--                        <th>--><?//= $item['url'] ?><!--</th>-->
<!--                        <th>--><?//= $item['budget'] ?><!--</th>-->
<!--                    </tr>-->
<!--            --><?php //endforeach; ?>
<!--            --><?php //endif; ?>
<!--        </tbody>-->
<!--    </table>-->
    <?php
    yii\bootstrap\Modal::begin([
        'header' => 'Создать проект',
        'id' => 'modal',
        'size' => 'modal-md',
    ]);
    ?>
<!--    <div id='modal-content'>Загружаю...</div>-->
    <?php yii\bootstrap\Modal::end(); ?>





