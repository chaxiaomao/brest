<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/19
 * Time: 20:33
 */
namespace common\tools;

use Yii;

class Setting
{

    public static function setSetting($setting)
    {
        $file = fopen(dirname(__FILE__)."/setting.txt", "w");
        fwrite($file, "");
        fwrite($file, json_encode($setting));
        fclose($file);
    }

    public static function getSetting()
    {
        $file = fopen(dirname(__FILE__)."/setting.txt", "r");
        $str = fgets($file);
        fclose($file);
        return json_decode($str);
    }
}