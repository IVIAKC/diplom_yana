<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?>
        <div style="float: right">
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        </div>
    </h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'avatar_id',
            'lead_id',
            'status_id',
            'type_id',
            'priority_id',
            'client_id',
            'name',
            'url:url',
            'description:ntext',
            'budget',
            [
                'attribute' => 'is_deleted',
                'value' => function ($data){
                    return $data->is_deleted ? 'Да' : 'Нет';
                }
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
