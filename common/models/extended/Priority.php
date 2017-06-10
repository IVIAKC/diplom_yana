<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "priority".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $color
 * @property integer $context_id
 *
 * @property Issue[] $issues
 * @property Context $context
 * @property Project[] $projects
 */
class Priority extends \yii\db\ActiveRecord
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
            [['name', 'context_id'], 'required'],
            [['description'], 'string'],
            [['context_id'], 'integer'],
            [['name', 'color'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['context_id'], 'exist', 'skipOnError' => true, 'targetClass' => Context::className(), 'targetAttribute' => ['context_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'color' => 'Color',
            'context_id' => 'Context ID',
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
    public function getContext()
    {
        return $this->hasOne(Context::className(), ['id' => 'context_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['priority_id' => 'id']);
    }
}
