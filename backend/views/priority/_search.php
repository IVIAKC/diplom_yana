<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\PrioritySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="priority-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'color') ?>

    <?= $form->field($model, 'context_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
