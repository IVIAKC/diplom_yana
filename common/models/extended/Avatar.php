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
            [['filename', 'content_type'], 'required'],
            [['is_system'], 'integer'],
            [['filename', 'content_type'], 'string', 'max' => 255],
            [['filename'], 'unique'],
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
            'content_type' => 'Тип файла',
            'is_system' => 'Системный',
        ];
    }

    /**
     * @return array
     */

    public static function getAvatarList(){
        return self::find()->select('filename')->indexBy('id')->column();
    }
}
