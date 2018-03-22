<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 10:58
 */
namespace backend\modules\Statistics\modules\Ips\controllers;

use common\models\entity\Ips;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '/iframe_layout';

    public function actionIndex()
    {
        $model = Ips::find()->all();
        return $this->render('index', ['model' => $model]);
    }

    public function actionRemove()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = Ips::findOne($id);
            $model->delete();
            return true;
        }
        return null;
    }
}