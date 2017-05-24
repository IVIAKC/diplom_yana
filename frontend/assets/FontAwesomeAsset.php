<?php
/**
 * Created by PhpStorm.
 * User: iviakc
 * Date: 24.05.17
 * Time: 23:39
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/fortawesome/font-awesome';
    public $css = [ 'css/font-awesome.css',];
}