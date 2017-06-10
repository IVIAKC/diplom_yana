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

    <?= $form->field($model, 'parent_issue') ?>

    <?= $form->field($model, 'priority_id') ?>

    <?= $form->field($model, 'type_id') ?>

    <?= $form->field($model, 'status_id') ?>

    <?= $form->field($model, 'reporter_id') ?>

    <?= $form->field($model, 'assignee_id') ?>

    <?= $form->field($model, 'creater_id') ?>

    <?= $form->field($model, 'project_id') ?>

    <?= $form->field($model, 'summary') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'updated_at') ?>

    <?= $form->field($model, 'is_deleted') ?>

    <?= $form->field($model, 'duedate') ?>

    <?= $form->field($model, 'estimate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
