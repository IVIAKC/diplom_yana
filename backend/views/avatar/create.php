<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\extended\Avatar */

$this->title = 'Создать Аватарку';
$this->params['breadcrumbs'][] = ['label' => 'Аватарки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avatar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
