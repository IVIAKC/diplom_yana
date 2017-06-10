<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-relative-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Войти', 'url' => ['/site/login']];
    } else {

        $menuItems[] = ['label' => 'Клиенты', 'url' => ['client/']];
        $menuItems[] = ['label' => 'Задачи', 'url' => ['issue/']];
        $menuItems[] = ['label' => 'Проекты', 'url' => ['project/']];
        $menuItems[] = [
            'label' => 'Параметры',
            'items' => [
                    ['label' => 'Приоритеты', 'url' => ['priority/']],
                    ['label' => 'Статусы', 'url' => ['status/']],
                    ['label' => 'Типы', 'url' => ['type/']],
                    ['label' => 'Окружение', 'url' => ['context/']],


            ]
        ];
        $menuItems[] = [
            'label' => 'Системное',
            'items' => [
                    ['label' => 'Настройки', 'url' => ['setting/']],
                    ['label' => 'Аватарки', 'url' => ['avatar/']],
                    ['label' => 'Комментарии', 'url' => ['comment/']],
                    ['label' => 'Файлы', 'url' => ['file/']],
            ]
        ];

        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Выйти',['class' => 'btn btn-link logout'])
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
