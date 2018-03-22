<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 19:53
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "后台登录页面";

?>

<div class="loginWraper">
    <div id="loginform" class="loginBox">

        <?php $form = ActiveForm::begin([
            'id' => 'login',
            'options' => ['class' => 'form form-horizontal',],
        ]); ?>
        <div class="row cl">
            <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
            <div class="formControls col-xs-8">
                <?= $form->field($model, 'username')->textInput(['id' => 'username', 'class' => 'input-text size-L', 'placeholder' => 'Username', 'required' => 'true',])->label(false)->error(false) ?>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
            <div class="formControls col-xs-8">
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password', 'class' => 'input-text size-L','placeholder' => 'Password', 'required' => 'true'])->label(false)->error(false) ?>
            </div>
        </div>

        <div class="row cl">
            <div class="formControls col-xs-8 col-xs-offset-3">
                <?= Html::submitButton('Log in', ['type' => 'submit','id' => 'submit', 'class' => 'btn btn-success radius size-L']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.0</div>
