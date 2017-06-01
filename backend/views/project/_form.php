<?php

use common\models\extended\Client;
use common\models\extended\Priority;
use common\models\extended\Status;
use common\models\extended\Type;
use common\models\extended\User;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">
    <div class="form-group">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'lead_id')->widget(Select2::classname(), [
                'data' => User::getUserList(),
                'options' => ['placeholder' => 'Выберите ответственного'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'status_id')->widget(Select2::classname(), [
                'data' => Status::getStatusList(),
                'options' => ['placeholder' => 'Выберите статус'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'type_id')->widget(Select2::classname(), [
                'data' => Type::getTypeList(),
                'options' => ['placeholder' => 'Выберите тип'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'priority_id')->widget(Select2::classname(), [
                'data' => Priority::getPriorityList(),
                'options' => ['placeholder' => 'Выберите приоритет'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'client_id')->widget(Select2::classname(), [
                'data' => Client::getClientList(),
                'options' => ['placeholder' => 'Выберите клиента'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]); ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'budget')->textInput(['maxlength' => true, 'type' => 'number']) ?>
        </div>

        <div class="col-md-12">
            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 7]) ?>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>


    </div>
    <?php ActiveForm::end(); ?>
</div>

</div>
