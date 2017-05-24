<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\extended\FileAttachment */

$this->title = 'Update File Attachment: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'File Attachments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-attachment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
