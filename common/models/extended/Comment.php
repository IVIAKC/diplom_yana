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
 * @property integer $is_deleted
 *
 * @property User $author
 */
class Comment extends \common\models\Comment
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
            [['created_at', 'updated_at'], 'safe'],
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
            'description' => 'Содержимое',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
            'is_deleted' => 'Удален',
        ];
    }


}
