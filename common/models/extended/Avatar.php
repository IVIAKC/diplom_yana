<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "avatar".
 *
 * @property integer $id
 * @property integer $file_id
 * @property integer $is_system
 *
 * @property Project[] $projects
 * @property User[] $users
 */
class Avatar extends \common\models\Avatar
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avatar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_id'], 'required'],
            [['file_id', 'is_system'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_id' => 'Файл',
            'is_system' => 'Системный',
        ];
    }
}
