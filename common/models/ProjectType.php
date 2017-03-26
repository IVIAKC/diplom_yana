<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "project_type".
 *
 * @property integer $id
 * @property integer $avatar_id
 * @property string $name
 * @property string $description
 * @property string $icon_url
 *
 * @property Project[] $projects
 * @property Avatar $avatar
 */
class ProjectType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avatar_id'], 'integer'],
            [['name'], 'required'],
            [['description'], 'string'],
            [['name', 'icon_url'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['avatar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Avatar::className(), 'targetAttribute' => ['avatar_id' => 'id']],
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
            'name' => 'Name',
            'description' => 'Description',
            'icon_url' => 'Icon Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvatar()
    {
        return $this->hasOne(Avatar::className(), ['id' => 'avatar_id']);
    }
}
