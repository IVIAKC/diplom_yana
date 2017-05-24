<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "priority".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $icon_url
 * @property string $color
 *
 * @property Issue[] $issues
 * @property Project[] $projects
 */
class Priority extends \common\models\Priority
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'priority';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name', 'icon_url', 'color'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'icon_url' => 'Икон Url',
            'color' => 'Цвет',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssues()
    {
        return $this->hasMany(Issue::className(), ['priority_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['priority_id' => 'id']);
    }
}
