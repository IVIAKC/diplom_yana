<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Issue */

$this->title = $model->summary;
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'summary',
            'description:ntext',
            [
                'attribute' => 'priority_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->priority->getColorView();
                }
            ],
            [
                'attribute' => 'type_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->type->name;
                }
            ],
            [
                'attribute' => 'status_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->status->name;
                }
            ],
            [
                'attribute' => 'reporter_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->reporter->username;
                }
            ],
            [
                'attribute' => 'assignee_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->assignee->username;
                }
            ],
            [
                'attribute' => 'creater_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->creater->username;
                }
            ],
            [
                'attribute' => 'project_id',
                'format' => 'html',
                'value' => function($data){
                    return $data->project->name;
                }
            ],

            'created_at:date',
            'updated_at:date',
            [
                'attribute' => 'is_deleted',
                'value' => function ($date){
                    return $date->is_deleted ? 'Да' : 'Нет';
                }
            ],
            'duedate:date',
        ],
    ]) ?>

</div>
