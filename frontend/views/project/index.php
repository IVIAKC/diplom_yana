<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $data array | bool */
/* @var $model common\models\extended\Project */


$this->title = 'Проекты';
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?= Html::a('Создать проект', false, ['class' => 'btn btn-success', 'id' => 'modal-btn', 'data-target'=>"/report/create"]) ?>
    </p>
    <?php
    yii\bootstrap\Modal::begin([
        'header' => 'Создать проект',
        'id' => 'modal',
        'size' => 'modal-md',
    ]);
    ?>
    <?php yii\bootstrap\Modal::end(); ?>





