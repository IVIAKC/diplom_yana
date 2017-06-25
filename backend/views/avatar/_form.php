<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Avatar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avatar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'file_id')->textInput() ?>

    <?= $form->field($model, 'is_system')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
