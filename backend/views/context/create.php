<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\extended\Context */

$this->title = 'Create Context';
$this->params['breadcrumbs'][] = ['label' => 'Contexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="context-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
