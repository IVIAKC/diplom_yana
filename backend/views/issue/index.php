<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-index">

    <h1><?= Html::encode($this->title) ?><?= Html::a('Создать Задачу', ['create'], ['class' => 'btn btn-success']) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sub_issue',
            'priority_id',
            'type_id',
            'status_id',
            // 'reporter_id',
            // 'assignee_id',
            // 'creater_id',
            // 'project_id',
            // 'summary',
            // 'description:ntext',
            // 'created_at',
            // 'updated_at',
            // 'is_deleted',
            // 'duedate',
            // 'estimate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
