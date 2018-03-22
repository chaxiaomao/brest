<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 10:58
 */
namespace backend\modules\System\modules\Setting\controllers;

use common\models\entity\Setting;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{

    public $layout = '/iframe_layout';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCache()
    {
        $cache = Yii::$app->cache;
        if ($cache->exists('setting')) {
            $cache->set('setting', [
               'site_name' =>  Yii::$app->request->post('site_name'),
               'site_keywords' =>  Yii::$app->request->post('site_keywords'),
               'site_description' =>  Yii::$app->request->post('site_description'),
               'site_copyright' =>  Yii::$app->request->post('site_copyright'),
               'site_ipc' =>  Yii::$app->request->post('site_ipc'),
               'site_email' =>  Yii::$app->request->post('site_email'),
               'site_statistics_code' =>  Yii::$app->request->post('site_statistics_code'),
            ]);
            \common\tools\Setting::setSetting($cache->get('setting'));
            echo '<script>alert("保存成功!")</script>';
        } else {
            $cache->add('setting', [
                'site_name' =>  Yii::$app->request->post('site_name'),
                'site_keywords' =>  Yii::$app->request->post('site_keywords'),
                'site_description' =>  Yii::$app->request->post('site_description'),
                'site_copyright' =>  Yii::$app->request->post('site_copyright'),
                'site_ipc' =>  Yii::$app->request->post('site_ipc'),
                'site_email' =>  Yii::$app->request->post('site_email'),
                'site_statistics_code' =>  Yii::$app->request->post('site_statistics_code'),
            ]);
            echo '<script>alert("保存失败!")</script>';
        }
        return $this->render('index');
    }
}