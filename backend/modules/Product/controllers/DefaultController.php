<?php

namespace backend\modules\Product\controllers;

use backend\models\form\uploadForm;
use common\models\entity\Category;
use common\models\entity\Product;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * Default controller for the `Product` module
 */
class DefaultController extends Controller
{
    public $layout = '/iframe_layout';
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = Product::find()->all();
        return $this->render('index', ['model' => $model]);
    }

    public function actionAdd()
    {
        $model = new Product();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo '<script>alert("保存成功!")</script>';
            } else {
                echo '<script>alert("保存失败!")</script>';
            }
        }
        $cs = Category::find()->all();
        $arr = [];
        for ($i=0;$i<count($cs);$i++) {
            $arr[$cs[$i]->id] = $cs[$i]->label;
        }
        return $this->render('form', ['model' => $model, 'arr' => $arr]);
    }

    public function actionEdit()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = Product::findOne($id);
            return $this->render('form', ['model' => $model, 'arr' => $this->getCategories()]);
        }
    }

    public function actionUpdate()
    {
        $request = Yii::$app->request;
        $data = $request->bodyParams;
        $id = $data['Product']['id'];
        if ($id != "" && $id != null) {
            $model = Product::findOne($id);
            $model->category_id = $data['Product']['category_id'];
            $model->label = $data['Product']['label'];
            $model->img_path = $data['Product']['img_path'];
            $model->model = $data['Product']['model'];
            $model->power = $data['Product']['power'];
            $model->carton_size = $data['Product']['carton_size'];
            $model->content = $data['Product']['content'];
            $model->save();
            echo '<script>alert("保存成功!")</script>';
        } else {
            echo '<script>alert("保存失败!")</script>';
        }
        return $this->render('form', ['model' => $model, 'arr' => $this->getCategories()]);
    }

    public function actionRemove()
    {
        $id = Yii::$app->request->get('id');
        if ($id != "" && $id != null) {
            $model = Product::findOne($id);
            $model->delete();
            return true;
        }
        return null;
    }

    public function actionStatus()
    {
        $id = Yii::$app->request->get('id');
        $type = Yii::$app->request->get('type');
        if ($id != "" && $id != null) {
            $model = Product::findOne($id);
            if ($type == "on") {
                $model->status = 0;
            } elseif ($type == "off") {
                $model->status = 1;
            }
            $model->save();
            return true;
        }
        return null;
    }

    private function getCategories()
    {
        $cs = Category::find()->all();
        $arr = [];
        for ($i = 0; $i < count($cs); $i++) {
            $arr[$cs[$i]->id] = $cs[$i]->label;
        }
        return $arr;
    }

}
