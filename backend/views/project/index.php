<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1>
        <?= Html::encode($this->title) ?>
        <?= Html::a('Создать Проект', ['create'], ['class' => 'btn btn-success','style'=>'float:right;']) ?>
    </h1>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'label' => 'Ответственный',
                'attribute' => 'lead.username',
            ],
            [
                    'label' => 'Статус',
                    'attribute' => 'status.name',
            ],
            [
                'label' => 'Тип',
                'attribute' => 'type.name',
            ],
            [
                'label' => 'Приоритет',
                'attribute' => 'priority_id',
            ],

            [
                'label' => 'Клиент',
                'attribute' => 'client_id',
            ],
            'url:url',
            'description:ntext',
            'budget',
            [
                'attribute' => 'is_deleted',
                'value' => function ($data){
                    return $data->is_deleted ? 'Да' : 'Нет';
                }
            ],
//             'created_at',
             'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
