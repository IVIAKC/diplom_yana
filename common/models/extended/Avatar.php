<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "avatar".
 *
 * @property integer $id
 * @property string $filename
 * @property string $content_type
 * @property integer $owner_id
 * @property string $avatar_type
 * @property integer $is_system
 *
 * @property User $owner
 * @property IssueType[] $issueTypes
 * @property Project[] $projects
 * @property ProjectType[] $projectTypes
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
            [['filename'], 'required'],
            [['owner_id', 'is_system'], 'integer'],
            [['filename'], 'string', 'max' => 255],
            [['filename'], 'unique'],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Имя файла',
            'owner_id' => 'Владелец',
            'is_system' => 'Системный',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(User::className(), ['id' => 'owner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIssueTypes()
    {
        return $this->hasMany(IssueType::className(), ['avatar_id' => 'id']);
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
    public function getProjectTypes()
    {
        return $this->hasMany(ProjectType::className(), ['avatar_id' => 'id']);
    }

    public static function getAvatarList(){
        return self::find()->select('filename')->indexBy('id')->column();
    }
}
