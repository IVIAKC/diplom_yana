<?php

use common\models\extended\Priority;
use common\models\extended\Project;
use common\models\extended\Status;
use common\models\extended\Type;
use common\models\extended\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\IssueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать Задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'summary',
            [
                'attribute' => 'parent_issue',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::a($data->parent_issue,['issue/view','id' => $data->parent_issue]);
                },
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
                'attribute' => 'type_id',
                'format' => 'html',

                'filter' => Type::getTypeList(),

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
                'attribute' => 'reporter_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->reporter->username,['user/view', 'id' => $data->reporter_id]);
                },
                'filter' => User::getUserList(),

            ],
            [
                'attribute' => 'assignee_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->assignee->username,['user/view', 'id' => $data->assignee_id]);
                },
                'filter' => User::getUserList(),

            ],
            [
                'attribute' => 'creater_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->creater->username,['user/view', 'id' => $data->creater_id]);
                },
                'filter' => User::getUserList(),

            ],
            [
                'attribute' => 'project_id',
                'format' => 'html',
                'value' => function($data){
                    return Html::a($data->project->name,['project/view', 'id' => $data->project_id]);
                },
                'filter' => Project::getProjectList(),

            ],

             'created_at',
             'updated_at',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
