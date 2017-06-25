<?php

namespace frontend\controllers;


use yii\web\Controller;

class StatisticController extends Controller
{
    public function actionIssueType(){
        return $this->render('type');
    }
}