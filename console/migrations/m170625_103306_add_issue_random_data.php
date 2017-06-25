<?php

use common\models\extended\Issue;
use yii\db\Migration;

class m170625_103306_add_issue_random_data extends Migration
{
    public function safeUp()
    {
        srand((new DateTime())->getTimestamp()*rand());

        for ($i=0;$i<500;$i++){
            $model = new Issue();
            srand($i*rand());
            $model->type_id = mt_rand(2,4);

            $model->priority_id = mt_rand(1,3);
            $model->status_id = mt_rand(1,4);
            $model->reporter_id = mt_rand(1,2);
            $model->assignee_id = mt_rand(1,2);
            $model->creater_id = mt_rand(1,2);
            $model->project_id = mt_rand(1,4);
            $model->summary = 'Превью '.$i;
            $model->description = 'Описание '.$i;
            $model->created_at = date('Y-m-d H:m:s',((new DateTime())->modify('-'.rand(1,30).'day'))->getTimestamp());
            $model->save();
            srand((new DateTime())->getTimestamp()*rand());

        }
    }

    public function safeDown()
    {

    }

}
