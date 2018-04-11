<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:36
 */
namespace frontend\modules\News\controllers;

use common\models\entity\Category;
use common\models\entity\News;
use common\models\entity\Product;
use frontend\tools\Remote;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

class DefaultController extends Controller
{
    public $layout = '/common_layout.php';

    public function actionIndex()
    {
        Remote::getRemoteInformation();
        $count = News::find()->count();
        $page = new Pagination(['totalCount' => $count, 'pageSize' => '8']);
        $model = News::find()
            ->orderBy('created_at DESC')
            ->offset($page->offset)
            ->limit($page->limit)
            ->all();
        return $this->render('index', ['model' => $model, 'pages' => $page]);
    }

    public function actionDetail()
    {
        Remote::getRemoteInformation();
        $id = Yii::$app->request->get('id');
        if ($id != '' && $id != null) {
            $model = News::findOne($id);
            if ($model) {
                return $this->render("detail", ['model' => $model]);
            } else {
                return $this->render('error');
            }
        }
    }

}