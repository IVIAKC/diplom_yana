<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Priority */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Приоритеты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-view">

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
            'name',
            'description:ntext',
            'icon_url:url',
            [
                'attribute' => 'color',
                'format' => 'html',
                'value' => function ($data) {
                    return $data->getColorView();
                },
            ]
        ],
    ]) ?>

</div>
