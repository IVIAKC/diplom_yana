<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\extended\Priority */

$this->title = 'Создать Приоритет';
$this->params['breadcrumbs'][] = ['label' => 'Приоритеты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="priority-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
