<?php
/**
 * Created by PhpStorm.
 * User: iviakc
 * Date: 06.05.17
 * Time: 11:24
 */

namespace api\modules\v1\controllers;


use Yii;
use yii\rest\Controller;
use yii\web\Response;
use yii\web\UnauthorizedHttpException;

class DefaultController extends Controller
{
    public function beforeAction($action)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
        
    }
}