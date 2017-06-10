<?php

use common\models\extended\Client;
use common\models\extended\Priority;
use common\models\extended\Status;
use common\models\extended\Type;
use common\models\extended\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать Проект', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description:ntext',

            [
                'attribute' => 'lead_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->lead->username,['user/view', 'id' => $data->lead_id]);
                },
                'filter' => User::getUserList(),

            ],
            [
                'attribute' => 'status_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->status->name,['status/view', 'id' => $data->status_id]);
                },
                'filter' => Status::getStatusList(),
            ],

            [
                'attribute' => 'priority_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->priority->name,['priority/view', 'id' => $data->priority_id]);
                },
                'filter' => Priority::getPriorityList(),

            ],

            [
                'attribute' => 'is_deleted',
                'value' => function ($data) {
                    return $data->is_deleted ? 'Да' : 'Нет';
                },
                'filter' => [
                    0 => 'Нет',
                    1 => 'Да',
                ]
            ],
             'created_at',
             'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
