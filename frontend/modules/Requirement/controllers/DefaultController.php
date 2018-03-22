<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:36
 */
namespace frontend\modules\Requirement\controllers;

use common\models\entity\RequireForm;
use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '/common_layout.php';

    public function actionIndex()
    {
        $model = new RequireForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo '<script>alert("Information submit success!")</script>';
            } else {
                echo '<script>alert("Information submit fail!")</script>';
            }
        }
        return $this->render("index", ['model' => $model]);
    }

    public function actionForm()
    {
        return $this->render("index");
    }

}