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
            'name' => 'Название',
            'description' => 'Описание',
            'color' => 'Цвет',
            'context_id' => 'Окружение',
        ];
    }


}
