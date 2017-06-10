<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "issue".
 *
 * @property integer $id
 * @property integer $sub_issue
 * @property integer $priority_id
 * @property integer $type_id
 * @property integer $status_id
 * @property integer $reporter_id
 * @property integer $assignee_id
 * @property integer $creater_id
 * @property integer $project_id
 * @property string $summary
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_deleted
 * @property string $duedate
 * @property string $estimate
 *
 * @property User $assignee
 * @property User $creater
 * @property Priority $priority
 * @property Project $project
 * @property User $reporter
 * @property Status $status
 * @property Issue $subIssue
 * @property Issue[] $issues
 */
class Issue extends \common\models\Issue
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'issue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_issue', 'priority_id', 'type_id', 'status_id', 'reporter_id', 'assignee_id', 'creater_id', 'project_id', 'is_deleted'], 'integer'],
            [['priority_id', 'type_id', 'status_id', 'creater_id', 'project_id'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at', 'duedate', 'estimate'], 'safe'],
            [['summary'], 'string', 'max' => 255],
            [['assignee_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['assignee_id' => 'id']],
            [['creater_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creater_id' => 'id']],
            [['priority_id'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::className(), 'targetAttribute' => ['priority_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['reporter_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['reporter_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['sub_issue'], 'exist', 'skipOnError' => true, 'targetClass' => Issue::className(), 'targetAttribute' => ['sub_issue' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_issue' => 'Sub Issue',
            'priority_id' => 'Priority ID',
            'type_id' => 'Type ID',
            'status_id' => 'Status ID',
            'reporter_id' => 'Reporter ID',
            'assignee_id' => 'Assignee ID',
            'creater_id' => 'Creater ID',
            'project_id' => 'Project ID',
            'summary' => 'Summary',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
            'duedate' => 'Duedate',
            'estimate' => 'Estimate',
        ];
    }

}
