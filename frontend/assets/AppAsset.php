<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'frontend\assets\FontAwesomeAsset'

    ];
    public $css = [
        'css/style.css?v1',
    ];
    public $js = [
        'js/script.js?v1',
        'js/chart.min.js'
    ];

}
