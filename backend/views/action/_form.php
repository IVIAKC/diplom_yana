<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Action */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'issue_id')->textInput() ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <?= $form->field($model, 'action_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
