<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "context".
 *
 * @property integer $id
 * @property string $alias
 * @property string $name
 *
 * @property Priority[] $priorities
 * @property Status[] $statuses
 * @property Type[] $types
 */
class Context extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'context';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'name'], 'required'],
            [['alias', 'name'], 'string', 'max' => 255],
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
            'alias' => 'Alias',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriorities()
    {
        return $this->hasMany(Priority::className(), ['context_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatuses()
    {
        return $this->hasMany(Status::className(), ['context_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypes()
    {
        return $this->hasMany(Type::className(), ['context_id' => 'id']);
    }
}
