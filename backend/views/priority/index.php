<?php

use common\models\extended\Context;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PrioritySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Приоритеты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать Приоритет', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'color',
                'format' => 'html',
                'value' => function ($data) {
                    return $data->getColorView();
                },
            ],
            [
                'attribute' => 'context_id',
                'format' => 'html',
                'value' => function ($data){
                    return Html::a($data->context->alias,['context/view','id' => $data->context_id]);
                },
                'filter' => Context::getContextList(),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
