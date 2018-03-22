<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/19
 * Time: 8:50
 */
namespace frontend\tools;

use common\models\entity\Ips;
use Yii;
use yii\db\Expression;

class Remote
{
    public static function getRemoteInformation()
    {
        $ip = Yii::$app->request->getUserIP();
        $url = Yii::$app->request->getUrl();
        $model = Ips::find()->where(['ip' => $ip, 'url' => $url])->all();
        if ($model) {
            Ips::updateAll(
                [
                    'view_count' => new Expression('view_count+' . 1),
                ],
                [
                    'and', ['url' => $url], ['=', 'url', $url],
                ]
            );
        } else {
            $model = new Ips();
            $model->ip = $ip;
            $model->location = Remote::getIPLocation($ip);
            $model->url = $url;
            $model->save();
        }
    }

//    public static function getIPLocation($queryIP)
//    {
//        $url = 'http://ip.qq.com/cgi-bin/searchip?searchip1=' . $queryIP;
//
//        //如果是新浪，这里的URL是：'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$queryIP;
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_ENCODING, 'gb2312');
//        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 获取数据返回
//        $result = curl_exec($ch);
//        $result = mb_convert_encoding($result, "utf-8", "gb2312"); // 编码转换，否则乱码
//        //   print_r($result);
//        curl_close($ch);
//        preg_match("@<span>(.*)</span></p>@iU", $result, $ipArray); //匹配标签，抓取查询到的ip地址(以数组的形式返回)
//        $location = $ipArray[0];
//        return $location;
//
//    }

    public static function getIPLocation($ip){
        $opts = array(
            'http'=>array(
                'method'=>"GET",
                'timeout'=>5,)
        );
        $context = stream_context_create($opts);
        if(strpos($ip,"127.0.0.") === true)return '';
        $url_ip='http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
        $str = @file_get_contents($url_ip, false, $context);
        if(!$str) return "";
        $json=json_decode($str,true);
        if($json['code']==0){
            $ipcity= $json['data']['region'].$json['data']['city'];
            $data= $ipcity;
        }else{
            $data="";
        }
        return $data;
    }

}