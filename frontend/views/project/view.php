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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'url:url',
            'description:ntext',
            [
                'attribute' => 'lead_id',
                'value' => function ($data){
                    return $data->lead->username;
                }
            ],
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
        ],
    ]) ?>

</div>
