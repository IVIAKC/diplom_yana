<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать Клиента', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'contentOptions' => [
                    'align' => 'left',
                    'class' => 'no-wrap-td',
                    'style' => 'width: 6%'
                ],
            ],
            'id',
            'name',
            [
                'class' => 'yii\grid\ActionColumn',

                'contentOptions' => [
                     'align' => 'left',
                     'class' => 'no-wrap-td',
                     'style' => 'width: 6%'
                 ],
            ],
        ],
    ]); ?>
</div>
