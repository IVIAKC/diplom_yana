<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $userModel common\models\extended\User*/
$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'author_id',
                'format' => 'html',
                'value' => function ($data){
                    return Html::a($data->author->username, ['user/view', 'id' => $data->author_id]);
//                        ;
//                    Html::a($data->category->title,['category/view', 'id' => $data->category_id])
                },
                'filter' => $userModel::getUserList(),
            ],
            'description:ntext',
            'created_at',
            'updated_at',
            [
                'attribute' => 'is_deleted',
                'value' => function ($data){
                    return $data->is_deleted ? 'Да' : 'Нет';
                },
                'filter' => [
                    0 => 'Нет',
                    1 => 'Да',
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
