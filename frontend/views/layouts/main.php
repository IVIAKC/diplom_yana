<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\extended\Issue;
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
    <script src="https://unpkg.com/react@latest/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@latest/dist/react-dom.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="nav-md">
<?php $this->beginBody() ?>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div id="sidebar-menu" class="main_menu_side">
                <div class="main_menu_side hidden-print main_menu menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li class="">
                            <a href="/home/index"><i class="fa fa-address-book-o"></i>Домашняя</a>
                        </li>
                        <li><a><i class="fa fa-edit"></i> Задачи <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="/issue/index?type=<?= Issue::TYPE_SOMEONE ?>">Мои зачади</a></li>
                                <li><a href="/issue/index">Все зачади</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-folder"></i> Проекты <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="/project/index?type=<?= Issue::TYPE_SOMEONE ?>">Мои проекты</a></li>
                                <li><a href="/project/index">Все проекты</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-folder"></i> Статистика <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none;">
                                <li><a href="/statistics/type">По типу</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="/img/profile_avatar.jpg" alt=""><?= empty(Yii::$app->user->identity->username) ?
                                        Html::a('Войти', '/site/login')
                                    : Yii::$app->user->identity->username ?>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main" style="min-height: 1990px;">
            <div class="row col-lg-12">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
