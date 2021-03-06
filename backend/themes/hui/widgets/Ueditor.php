<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 23:32
 */
namespace backend\themes\hui\widgets;

use backend\themes\hui\AppAsset;
use backend\themes\hui\UeditorAsset;
use yii\helpers\Html;
use yii\helpers\Json;

class Ueditor extends \yii\widgets\InputWidget
{
    public $attributes;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        $view = $this->getView();
        $this->attributes['id'] = $this->options['id'];
        if ($this->hasModel()) {
            $input = Html::activeTextarea($this->model, $this->attribute, $this->attributes);
        } else {
            $input = Html::activeTextarea($this->name, '', $this->attributes);
        }
        echo $input;
        UeditorAsset::register($view);//将Ueditor用到的脚本资源输出到视图
        $js='var ue = UE.getEditor("'.$this->options['id'].'",'.$this->getOptions().');';//Ueditor初始化脚本
        $view->registerJs($js, $view::POS_END);//将Ueditor初始化脚本也响应到视图中
    }

    public function getOptions()
    {
        unset($this->options['id']);//Ueditor识别不了id属性,故而删之
        return Json::encode($this->options);
    }
}