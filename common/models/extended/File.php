<?php
/**
 * Created by PhpStorm.
 * User: iviakc
 * Date: 03.06.17
 * Time: 22:08
 */

namespace common\models\extended;


use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class File extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file'],
        ];
    }

    public function upload()
    {
        if($this->validate()) {
            $this->file->saveAs(Yii::getAlias('@frontend') . Yii::$app->params['file_href'] . $this->file->baseName . '.' . $this->file->extension);
            return true;
        }else{
            return $this->getErrors();
        }
    }

    public function getFullName(){
        return $this->file->baseName . $this->file->extension;
    }
}