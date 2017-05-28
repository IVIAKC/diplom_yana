<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\extended\Avatar */

$this->title = 'Изменить Аватарку: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Аватарки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="avatar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
