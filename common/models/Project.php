<?php

namespace common\models;

use Yii;

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
 *
 * @property FileAttachment[] $fileAttachments
 * @property Issue[] $issues
 * @property Avatar $avatar
 * @property Client $client
 * @property User $lead
 * @property Priority $priority
 * @property ProjectStatus $status
 * @property ProjectType $type
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avatar_id', 'lead_id', 'status_id', 'type_id', 'priority_id', 'client_id', 'is_deleted'], 'integer'],
            [['name'], 'required'],
            [['description'], 'string'],
            [['budget'], 'number'],
            [['duedate', 'created_at', 'updated_at'], 'safe'],
            [['name', 'url'], 'string', 'max' => 255],
            [['avatar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Avatar::className(), 'targetAttribute' => ['avatar_id' => 'id']],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['client_id' => 'id']],
            [['lead_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['lead_id' => 'id']],
            [['priority_id'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::className(), 'targetAttribute' => ['priority_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectType::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
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
            'name' => 'Name',
            'url' => 'Url',
            'description' => 'Description',
            'budget' => 'Budget',
            'is_deleted' => 'Is Deleted',
            'duedate' => 'Duedate',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFileAttachments()
    {
        return $this->hasMany(FileAttachment::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssues()
    {
        return $this->hasMany(Issue::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvatar()
    {
        return $this->hasOne(Avatar::className(), ['id' => 'avatar_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Client::className(), ['id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLead()
    {
        return $this->hasOne(User::className(), ['id' => 'lead_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(Priority::className(), ['id' => 'priority_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(ProjectStatus::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(ProjectType::className(), ['id' => 'type_id']);
    }
}
