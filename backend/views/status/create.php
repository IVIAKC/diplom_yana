<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\extended\Status */

$this->title = 'Создать Статус';
$this->params['breadcrumbs'][] = ['label' => 'Статусы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
