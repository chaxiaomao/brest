<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 10:58
 */
namespace backend\modules\Statistics\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index', []);
    }
}