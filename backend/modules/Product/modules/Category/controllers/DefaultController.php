<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/16
 * Time: 11:33
 */
namespace backend\modules\Product\modules\Category\controllers;
use common\models\entity\Category;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


/**
 * Default controller for the `category` module
 */
class DefaultController extends Controller
{
    public $layout = '/iframe_layout';

    public function actionIndex()
    {
        $model = Category::find()->all();
        return $this->render("index", ['model' => $model]);
    }

    public function actionAdd()
    {
        $model = new Category();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo '<script>alert("保存成功!")</script>';
            } else {
                echo '<script>alert("保存失败!")</script>';
            }
        }
        return $this->render("form", ['model' => $model]);
    }

    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = Category::findOne($id);
            return $this->render("form", ['model' => $model]);
        }
    }

    public function actionUpdate()
    {
        $request = Yii::$app->request;
        $data = $request->bodyParams;
        $id = $data['Category']['id'];
        if ($id != "" && $id != null) {
            $model = Category::findOne($id);
            $model->label = $data['Category']['label'];
            $model->description = $data['Category']['description'];
            $model->save();
            echo '<script>alert("保存成功!")</script>';
            return $this->render("form", ['model' => $model]);
        }
    }

    public function actionRemove()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = Category::findOne($id);
            $model->delete();
            return true;
        }
        return null;
    }

}