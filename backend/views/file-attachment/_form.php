<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\extended\FileAttachment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-attachment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'context_id')->textInput() ?>

    <?= $form->field($model, 'file_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
