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
            'parent_issue',
            'priority_id',
            'type_id',
            'status_id',
            'reporter_id',
            'assignee_id',
            'creater_id',
            'project_id',
            'summary',
            'description:ntext',
            'created_at',
            'updated_at',
            'is_deleted',
            'duedate',
        ],
    ]) ?>

</div>
