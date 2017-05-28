<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Приоритеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать Приоритет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description:ntext',
            [
                'attribute' => 'color',
                'format' => 'html',
                'value' => function ($data){
                    return $data->getColorView();
                }
            ],
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
