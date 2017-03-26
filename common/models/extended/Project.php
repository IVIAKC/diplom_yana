<?php

namespace common\models\extended;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property integer $avatar_id
 * @property integer $lead_id
 * @property integer $status_id
 * @property integer $type_id
 * @property integer $priority_id
 * @property integer $client_id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property string $budget
 * @property integer $is_deleted
 * @property string $duedate
 * @property string $created_at
 * @property string $updated_at

 */
class Project extends \common\models\Project
{
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avatar_id' => 'Avatar ID',
            'lead_id' => 'Lead ID',
            'status_id' => 'Status ID',
            'type_id' => 'Type ID',
            'priority_id' => 'Priority ID',
            'client_id' => 'Client ID',
            'name' => 'Название',
            'url' => 'Адрес',
            'description' => 'Описание',
            'budget' => 'Бюджет',
            'is_deleted' => 'Is Deleted',
            'duedate' => 'Дата закрытия',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getProjectForPrint(){

        $projects = (new Query())->select('*')->from('project')->all();

        if ($projects){
            return $projects;
        }

        return false;
    }

}
