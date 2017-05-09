<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\extended\Avatar */

$this->title = 'Create Avatar';
$this->params['breadcrumbs'][] = ['label' => 'Avatars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avatar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
