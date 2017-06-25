<?php

namespace frontend\controllers;


use common\models\extended\Issue;
use common\models\extended\Status;
use common\models\extended\Type;
use common\models\extended\User;
use DateTime;
use yii\web\Controller;

class StatisticsController extends Controller
{
    public function actionType(){

        $date = (new DateTime())->modify('-30 day');
        for($i=0;$i<30;$i++){
            $date->modify('+1 day');
            $labels[] = date_format($date,'Y-m-d');
        }


        $type = Type::find()->select('name')->orderBy('id')->indexBy('id')->column();
        $datesets = [];
        foreach ($type as $type_id => $name) {
            unset($point);
            $point['label'] = $name;
            foreach ($labels as $date) {
                $point['data'][] = count(Issue::find()
                    ->where(['type_id' => $type_id])
                    ->andWhere(['>=','created_at',$date.' 00:00:00'])
                    ->andWhere(['<=','created_at',$date.' 23:59:59'])
                    ->all());
            }
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $point['backgroundColor']="rgba({$r},{$g},{$b},0.4)";
            $point['borderColor']="rgba({$g},{$r},{$b},1)";
            $datesets[] = $point;
        }
        return $this->render('type',['datesets' => $datesets,'labels' => $labels]);
    }

    public function actionUsers(){
        $date = (new DateTime())->modify('-30 day');
        for($i=0;$i<30;$i++){
            $date->modify('+1 day');
            $labels[] = date_format($date,'Y-m-d');
        }


        $user = User::find()->select('username')->orderBy('id')->indexBy('id')->column();
        $datesets = [];
        foreach ($user as $user_id => $name) {
            unset($point);
            $point['label'] = $name;
            foreach ($labels as $date) {
                $point['data'][] = count(Issue::find()
                    ->where(['assignee_id' => $user_id])
                    ->andWhere(['>=','created_at',$date.' 00:00:00'])
                    ->andWhere(['<=','created_at',$date.' 23:59:59'])
                    ->all());
            }
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $point['backgroundColor']="rgba({$r},{$g},{$b},0.4)";
            $point['borderColor']="rgba({$g},{$r},{$b},1)";
            $datesets[] = $point;
        }
        return $this->render('type',['datesets' => $datesets,'labels' => $labels]);
    }

    public function actionStatus(){
        $date = (new DateTime())->modify('-30 day');
        for($i=0;$i<30;$i++){
            $date->modify('+1 day');
            $labels[] = date_format($date,'Y-m-d');
        }


        $user = Status::find()->select('name')->orderBy('id')->indexBy('id')->column();
        $datesets = [];
        foreach ($user as $user_id => $name) {
            unset($point);
            $point['label'] = $name;
            foreach ($labels as $date) {
                $point['data'][] = count(Issue::find()
                    ->where(['status_id' => $user_id])
                    ->andWhere(['>=','created_at',$date.' 00:00:00'])
                    ->andWhere(['<=','created_at',$date.' 23:59:59'])
                    ->all());
            }
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $point['backgroundColor']="rgba({$r},{$g},{$b},0.4)";
            $point['borderColor']="rgba({$g},{$r},{$b},1)";
            $datesets[] = $point;
        }
        return $this->render('type',['datesets' => $datesets,'labels' => $labels]);
    }
}