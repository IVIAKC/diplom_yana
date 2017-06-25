<?php

namespace frontend\controllers;


use common\models\extended\Issue;
use common\models\search\ProjectSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class IssueController extends Controller
{
    public function actionIndex($type = null){

        $query = Issue::find();

        if($type == Issue::TYPE_SOMEONE)
            $query = Issue::find()
                ->orWhere(['assignee_id' => Yii::$app->user->id])
                ->orWhere(['created_at' => Yii::$app->user->id])
                ->orWhere(['reporter_id' => Yii::$app->user->id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query->orderBy('status_id'),
            'pagination' => [
                'pageSize' => 15

            ]
        ]);

        if($type == Issue::TYPE_SOMEONE){
            return $this->render('index',['issueProvider' => $dataProvider]);
        }
        return $this->render('index',['issueProvider' => $dataProvider]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => Issue::findOne(['id',$id]),
        ]);
    }


}