<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property integer $id
 * @property integer $issue_id
 * @property integer $author_id
 * @property string $action_type
 * @property string $action_body
 * @property string $created_at
 *
 * @property User $author
 * @property Issue $issue
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['issue_id', 'author_id'], 'integer'],
            [['action_type'], 'required'],
            [['action_body'], 'string'],
            [['created_at'], 'safe'],
            [['action_type'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['issue_id'], 'exist', 'skipOnError' => true, 'targetClass' => Issue::className(), 'targetAttribute' => ['issue_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'issue_id' => 'Задача',
            'author_id' => 'Автор',
            'action_type' => 'Тип события',
            'action_body' => 'Тело события',
            'created_at' => 'Создано',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssue()
    {
        return $this->hasOne(Issue::className(), ['id' => 'issue_id']);
    }
}
