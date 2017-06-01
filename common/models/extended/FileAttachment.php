<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "file_attachment".
 *
 * @property integer $id
 * @property integer $issue_id
 * @property integer $project_id
 * @property integer $comment_id
 * @property integer $author_id
 * @property string $filename
 * @property string $file_size
 * @property string $url
 * @property string $created_at
 *
 * @property User $author
 * @property Comment $comment
 * @property Issue $issue
 * @property Project $project
 */
class FileAttachment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'file_attachment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['issue_id', 'project_id', 'comment_id', 'author_id', 'file_size'], 'integer'],
            [['filename', 'file_size'], 'required'],
            [['created_at'], 'safe'],
            [['filename', 'url'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['comment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Comment::className(), 'targetAttribute' => ['comment_id' => 'id']],
            [['issue_id'], 'exist', 'skipOnError' => true, 'targetClass' => Issue::className(), 'targetAttribute' => ['issue_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
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
            'project_id' => 'Проект',
            'comment_id' => 'Коментарий',
            'author_id' => 'Автор',
            'filename' => 'Имя файла',
            'file_size' => 'Размер файла',
            'url' => 'Url',
            'created_at' => 'Создан Время',
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
    public function getComment()
    {
        return $this->hasOne(Comment::className(), ['id' => 'comment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssue()
    {
        return $this->hasOne(Issue::className(), ['id' => 'issue_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    public  static function getFileList(){
        return self::find()->select('filename')->indexBy('id')->column();
    }
}
