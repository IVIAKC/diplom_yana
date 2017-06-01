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
 * @property Action[] $actions
 * @property FileAttachment[] $fileAttachments
 * @property User $assignee
 * @property User $creater
 * @property Priority $priority
 * @property Project $project
 * @property User $reporter
 * @property Status $status
 * @property Issue $subIssue
 * @property Issue[] $issues
 * @property Type $type
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
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_issue' => 'Под задача',
            'priority_id' => 'Приоритет',
            'type_id' => 'Тип',
            'status_id' => 'Статус',
            'reporter_id' => 'Проверяющий',
            'assignee_id' => 'Ответственный',
            'creater_id' => 'Создатель',
            'project_id' => 'Проект',
            'summary' => 'Заголовок',
            'description' => 'Описание',
            'created_at' => 'Создан Время',
            'updated_at' => 'Изменен Время',
            'is_deleted' => 'Удален',
            'duedate' => 'Ограничено время',
            'estimate' => 'Оцененное время',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActions()
    {
        return $this->hasMany(Action::className(), ['issue_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFileAttachments()
    {
        return $this->hasMany(FileAttachment::className(), ['issue_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssignee()
    {
        return $this->hasOne(User::className(), ['id' => 'assignee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreater()
    {
        return $this->hasOne(User::className(), ['id' => 'creater_id']);
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
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReporter()
    {
        return $this->hasOne(User::className(), ['id' => 'reporter_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubIssue()
    {
        return $this->hasOne(Issue::className(), ['id' => 'sub_issue']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssues()
    {
        return $this->hasMany(Issue::className(), ['sub_issue' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    public static function getIssueList(){
        return self::find()->select('summary')->indexBy('id')->column();
    }
}
