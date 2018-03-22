<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 20:13
 */
namespace backend\themes\hui;

use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
    public $css = [
        "static/h-ui/css/H-ui.min.css",
        "static/h-ui.admin/css/H-ui.admin.css",
        "static/h-ui.admin/css/H-ui.login.css",
        "static/h-ui.admin/skin/default/skin.css",
        "static/h-ui.admin/css/style.css",
        "lib/Hui-iconfont/1.0.8/iconfont.css",
    ];

    public $js = [
        "lib/jquery/1.9.1/jquery.min.js",
        "lib/layer/2.4/layer.js",
        "static/h-ui/js/H-ui.min.js",
        "static/h-ui.admin/js/H-ui.admin.js",
        "lib/jquery.contextmenu/jquery.contextmenu.r2.js",

        "lib/html5shiv.js",
        "lib/respond.min.js",
        "lib/DD_belatedPNG_0.0.8a-min.js",

        "lib/datatables/1.10.0/jquery.dataTables.min.js",
        "lib/laypage/1.2/laypage.js",

//        "lib/ueditor/1.4.3/ueditor.config.js",
//        "lib/ueditor/1.4.3/ueditor.all.min.js",
//        "lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js",
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [

    ];

    public function init()
    {
        $this->sourcePath = '@app/themes/' . BREST_BACKEND_THEME_HUI . '/assets';
        parent::init(); // TODO: Change the autogenerated stub
    }
}