<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\extended\FileAttachment */

$this->title = 'Create File Attachment';
$this->params['breadcrumbs'][] = ['label' => 'File Attachments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-attachment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
