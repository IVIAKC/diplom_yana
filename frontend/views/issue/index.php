<?php
use common\models\extended\Issue;
?>
<?php

use common\models\extended\Client;
use common\models\extended\Priority;
use common\models\extended\Project;
use common\models\extended\Status;
use common\models\extended\Type;
use common\models\extended\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?=Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $issueProvider,
        'tableOptions' => [
            'class' => 'table',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'summary',
            [
                'attribute' => 'parent_issue',
                'format' => 'html',
                'value' => function ($data) {
                    if(!empty($data->parent))
                        return Html::a($data->parent->summary,['issue/view','id' => $data->parent_issue]);
                    return '';
                },
            ],
            [
                'attribute' => 'priority_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->priority->getColorView();
                },
                'filter' => Priority::getPriorityList(),

            ],
            [
                'attribute' => 'type_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->type->name;
                },
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

            'created_at:date',

            [
                'class' => 'yii\grid\ActionColumn',

                'buttons'=>[
                    'view'=>function ($url, $model) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['issue/view','id'=>$model['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-eye-open"></span>', $customurl,
                            ['title' => Yii::t('yii', 'View'), 'data-pjax' => '0']);
                    }
                ],
                'template'=>'{view}',

            ],

        ],
    ]); ?>
</div>
