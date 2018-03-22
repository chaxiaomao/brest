<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:36
 */
namespace frontend\modules\Search\controllers;

use common\models\entity\Category;
use common\models\entity\Product;
use frontend\tools\Remote;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '/common_layout.php';

    public function actionIndex()
    {
        Remote::getRemoteInformation();
        if (Yii::$app->request->isGet) {
            $tag = Yii::$app->request->get('tag');
            if ($tag != "" && $tag != null) {
                $model = Product::find()
                    ->where(['like', 'label', $tag])
                    ->andWhere(['status' => 0])
                    ->all();
                return $this->render('index', ['model' => $model]);
            }
        }
        return $this->render('error');
    }

    public function actionCategory()
    {
        Remote::getRemoteInformation();
        $id = Yii::$app->request->get('id');
        if ($id != '' && $id != null) {
            $model = Product::find()->where(['category_id' => $id, 'status' => 0])->all();
            if ($model) {
                return $this->render("index", ['model' => $model]);
            } else {
                return $this->render('error');
            }
        }
        return null;
    }

}