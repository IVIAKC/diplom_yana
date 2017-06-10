<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $context_id
 *
 * @property Issue[] $issues
 * @property Project[] $projects
 * @property Context $context
 */
class Status extends \common\models\Status
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'context_id'], 'required'],
            [['context_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
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
            'name' => 'Название',
            'description' => 'Описание',
            'context_id' => 'Окружение',
        ];
    }

    public static function getStatusList(){
        return self::find()->select('name')->orderBy('name')->indexBy('id')->column();
    }
}
