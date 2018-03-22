<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:36
 */
namespace frontend\modules\About\controllers;

use frontend\tools\Remote;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '/common_layout.php';

    public function actionIndex()
    {
        Remote::getRemoteInformation();
        return $this->render("index");
    }

}