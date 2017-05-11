<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $is_deleted
 *
 * @property User $author
 * @property FileAttachment[] $fileAttachments
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id'], 'required'],
            [['author_id', 'is_deleted'], 'integer'],
            [['description'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Автор',
            'description' => 'Описание',
            'created_at' => 'Создан время',
            'updated_at' => 'Изменен время',
            'deleted_at' => 'Удален время',
            'is_deleted' => 'Удален',
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
    public function getFileAttachments()
    {
        return $this->hasMany(FileAttachment::className(), ['comment_id' => 'id']);
    }
}
