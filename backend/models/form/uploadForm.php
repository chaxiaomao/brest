<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 10:06
 */
namespace backend\models\form;

use yii\base\Model;

class uploadForm extends Model
{
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}