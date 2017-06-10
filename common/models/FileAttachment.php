<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "file_attachment".
 *
 * @property integer $id
 * @property integer $context_id
 * @property integer $file_id
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
            [['context_id', 'file_id'], 'required'],
            [['context_id', 'file_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'context_id' => 'Context ID',
            'file_id' => 'File ID',
        ];
    }
}
