<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\FileAttachmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'File Attachments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-attachment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create File Attachment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'context_id',
            'file_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
