<?php

namespace common\models\extended;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property integer $id
 * @property string $filename
 * @property string $extension
 * @property integer $size
 * @property string $alias
 */
class File extends \common\models\File
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filename', 'extension', 'size', 'alias'], 'required'],
            [['size'], 'integer'],
            [['filename'], 'string', 'max' => 50],
            [['extension'], 'string', 'max' => 5],
            [['alias'], 'string', 'max' => 32],
            [['alias'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filename' => 'Filename',
            'extension' => 'Extension',
            'size' => 'Size',
            'alias' => 'Alias',
        ];
    }
}
