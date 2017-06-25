<?php

namespace common\models\extended;

use Yii;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "issue".
 *
 * @property integer $id
 * @property integer $parent_issue
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

    const TYPE_ALL = 0;
    const TYPE_SOMEONE = 1;

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
            [['parent_issue', 'priority_id', 'type_id', 'status_id', 'reporter_id', 'assignee_id', 'creater_id', 'project_id', 'is_deleted'], 'integer'],
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
            [['parent_issue'], 'exist', 'skipOnError' => true, 'targetClass' => Issue::className(), 'targetAttribute' => ['parent_issue' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_issue' => 'Родительская задача',
            'priority_id' => 'Приоритет',
            'type_id' => 'Тип',
            'status_id' => 'Статус',
            'reporter_id' => 'Наблюдатель',
            'assignee_id' => 'Ответственный',
            'creater_id' => 'Создатель',
            'project_id' => 'Проект',
            'summary' => 'Превью',
            'description' => 'Описание',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
            'is_deleted' => 'Удален',
            'duedate' => 'Крайний срок',
            'estimate' => 'Оцененное время',
        ];
    }

    public static function getIssueList(){
        return self::find()->select('summary')->orderBy('summary')->indexBy('id')->column();
    }
    public static function getAllArray($type = self::TYPE_ALL, $user_id = null){
        if($type == self::TYPE_ALL)
            return self::find()->all();
        if($type == self::TYPE_SOMEONE)
            if(empty($user_id))
                throw new NotFoundHttpException();
            return self::find()->where([])->all();
    }
}
