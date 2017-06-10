<?php

use common\models\extended\Context;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description',
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
