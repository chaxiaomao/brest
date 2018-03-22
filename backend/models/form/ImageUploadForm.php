<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 10:06
 */
namespace backend\models\form;

use Yii;
use yii\base\Model;
use yii\helpers\FileHelper;

class ImageUploadForm extends Model
{
    /**
     * @var string 保存目录
     */
    public $savePath = '';

    /**
     * @var UploadedFile 上传文件对象实例
     */
    public $file = '';


    //校验规则
    public function rules()
    {
        return [
            ['imageFile', 'required'],
            ['imageFile', 'file', //重点是这个file验证器，就是yii\validators\FilterValidator这个类
                'skipOnEmpty' => false,
                'extensions' => 'png,jpg,gif,bmp',
                'maxSize' => 1024000,
            ],
            ['imageFile', 'validateSize']
        ];
    }

    public function upload(){
        if(!$this->validate()){
            return false;
        }

        $randomNumber = microtime() . mt_rand(111111, 999999);
        $filename = md5($randomNumber) . '.' . $this->file->extension; //保持后缀
        $randomFolder = substr($randomNumber, -2); //以最后两个数字作为保存的子目录，以免同一个目录存在太多文件造成索引压力或维护管理不方便

        $savePath = IMAGE_SITE . $randomFolder . '/' . $filename;
        $fullPath = Yii::getAlias('@app/web') . $savePath;
        if(!is_dir(dirname($fullPath))){
            FileHelper::createDirectory(dirname($fullPath));
        }

        if(!$this->file->saveAs($fullPath)){
            throw new \yii\base\ErrorException('保存上传文件失败');
        }

        $this->savePath = $savePath; //存给自己的属性是为了让外部获取这个保存后的路径到底是什么路径
        return true;
    }
}