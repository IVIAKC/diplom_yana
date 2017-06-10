<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $id
 * @property integer $is_editable
 * @property integer $is_list
 * @property string $alias
 * @property string $name
 * @property string $value
 */
class Setting extends \common\models\Setting
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_editable', 'is_list'], 'integer'],
            [['alias', 'name', 'value'], 'required'],
            [['alias', 'name', 'value'], 'string', 'max' => 50],
            [['alias'], 'unique'],
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
            'is_editable' => 'Is Editable',
            'is_list' => 'Is List',
            'alias' => 'Alias',
            'name' => 'Name',
            'value' => 'Value',
        ];
    }
}
