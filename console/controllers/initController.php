<?php
namespace console\controllers;

use common\models\User;
use yii\console\Controller;

class initController extends Controller
{
    /**
     * 创建admin
     */
    public function actionUser()
    {
        echo "创建admin\n";
        $user = $this->prompt("输入名字");
        $email = $this->prompt("输入邮箱");
        $password = $this->prompt("输入密码");

        $model = new User();
        $model->user = $user;
        $model->email = $email;
        $model->password = $password;

        if(!$model->save()) {
            foreach ($model->getErrors() as $error) {
                foreach ($error as $e) {
                    echo "$e\n";

                }
            }
            return 1;
        }
        return 0;
    }
}