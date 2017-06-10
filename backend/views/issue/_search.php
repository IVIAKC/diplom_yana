<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\IssueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sub_issue') ?>

    <?= $form->field($model, 'priority_id') ?>

    <?= $form->field($model, 'type_id') ?>

    <?= $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'reporter_id') ?>

    <?php // echo $form->field($model, 'assignee_id') ?>

    <?php // echo $form->field($model, 'creater_id') ?>

    <?php // echo $form->field($model, 'project_id') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'duedate') ?>

    <?php // echo $form->field($model, 'estimate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
