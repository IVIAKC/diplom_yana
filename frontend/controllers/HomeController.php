<?php

namespace frontend\controllers;


use common\models\extended\Issue;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex(){
        return $this->render('index',['issues' => Issue::getAllArray()]);
    }
}