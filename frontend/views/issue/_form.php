<?php

use common\models\extended\Issue;
use common\models\extended\Priority;
use common\models\extended\Project;
use common\models\extended\Status;
use common\models\extended\Type;
use common\models\extended\User;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Issue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="issue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <div class="form-group row">

        <div class="col-lg-3">
            <?= $form->field($model, 'parent_issue')->widget(Select2::classname(), [
                'data' => Issue::getIssueList(),
                'options' => ['placeholder' => 'Выберите родительскую задачу'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">

            <?= $form->field($model, 'priority_id')->widget(Select2::classname(), [
                'data' => Priority::getPriorityList(),
                'options' => ['placeholder' => 'Выберите приоритет'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">


            <?= $form->field($model, 'type_id')->widget(Select2::classname(), [
                'data' => Type::getTypeList(),
                'options' => ['placeholder' => 'Выберите тип'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">

            <?= $form->field($model, 'status_id')->widget(Select2::classname(), [
                'data' => Status::getStatusList(),
                'options' => ['placeholder' => 'Выберите статус'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'reporter_id')->widget(Select2::classname(), [
                'data' => User::getUserList(),
                'options' => ['placeholder' => 'Выберите ответственного'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'assignee_id')->widget(Select2::classname(), [
                'data' => User::getUserList(),
                'options' => ['placeholder' => 'Выберите исполнителя'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'creater_id')->widget(Select2::classname(), [
                'data' => User::getUserList(),
                'options' => ['placeholder' => 'Выберите статус'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'project_id')->widget(Select2::classname(), [
                'data' => Project::getProjectList(),
                'options' => ['placeholder' => 'Выберите статус'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-lg-3">

        <?= $form->field($model, 'duedate')->textInput() ?>
        </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
