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
class Avatar extends \yii\db\ActiveRecord
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
            'file_id' => 'File ID',
            'is_system' => 'Is System',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['avatar_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['avatar_id' => 'id']);
    }
}
