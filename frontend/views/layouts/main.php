<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Yii::$app->controller->renderPartial('//partials/sidebar.php'); ?>
<div class="menu">

    Какое-то меню.

</div>
<div class="container">
    <div class="main-content">
        <?= $content ?>
    </div>
</div>
</div>
<footer>
    <div id="footer">
        <div id="twitter"></div>
        <div id="sitemap"></div>
        <div id="social"></div>
        <div id="footer-logo"></div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
