<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Project[] $projects
 */
class Client extends \common\models\Client
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
        ];
    }

    public static function getClientList(){
        return self::find()->select('name')->indexBy('id')->column();
    }
}
