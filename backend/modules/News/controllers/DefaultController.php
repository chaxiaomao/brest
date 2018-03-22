<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 21:32
 */
namespace backend\modules\News\controllers;

use common\models\entity\News;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '/iframe_layout';

    public function actionIndex()
    {
        $model = News::find()->all();
        return $this->render('index', ['model' => $model]);
    }

    public function actionAdd()
    {
        $model = new News();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo '<script>alert("保存成功!")</script>';
            } else {
                echo '<script>alert("保存失败!")</script>';
            }
        }
        return $this->render('form', ['model' => $model]);
    }

    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = News::findOne($id);
            return $this->render('form', ['model' => $model]);
        }
        return null;
    }

    public function actionRemove()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = News::findOne($id);
            $model->delete();
            return true;
        }
        return null;
    }
}