<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Issue */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
            'estimate',
        ],
    ]) ?>

</div>
