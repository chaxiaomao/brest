<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 21:39
 */
namespace frontend\themes\brest;
use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
//    public $sourcePath = '@app/themes/' . BREST_FRONTEND_THEME . '/assets';

    public $css = [
        'css/reset.css',
        'css/thems.css',
        'css/responsive.css',
        'css/swiper.min.css',
    ];

    public $js = [
        'js/jquery-1.8.3.min.js',
        'js/js_z.js',
//        'js/banner.js',
        'js/swiper.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public function init()
    {
        $this->sourcePath = '@app/themes/' . BREST_FRONTEND_THEME . '/assets';
        parent::init(); // TODO: Change the autogenerated stub
    }
}