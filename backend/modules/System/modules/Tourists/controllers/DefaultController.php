<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 10:58
 */
namespace backend\modules\System\modules\Tourists\controllers;

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
}