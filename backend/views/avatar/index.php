<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avatars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avatar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Avatar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'filename',
            'content_type',
            'owner_id',
            'avatar_type',
            // 'is_system',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
