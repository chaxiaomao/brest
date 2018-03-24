<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */

use yii\helpers\Html;

$this->title = 'Requirement';
$this->registerCss(".book li .title{text-align:right;}.title{color:gray;}")
?>
<div class="banner banner_s">
    <div class="join clearfix">
        <ul class="book">
            <li class="clearfix">
                <p style="color:gray;"><?= Yii::t('app.t2', 'Thanks for leaving your requirement for us') ?></p>
            </li>
            <?php
            $form = \yii\widgets\ActiveForm::begin([
                'options' => [
                    'id' => 'requirement_form',
                ],
            ]); ?>
            <li class="clearfix">
                <span class="title"><?= Yii::t('app.t2', 'Name:') ?></span>
                <div class="li_r">
                    <?= $form->field($model, 'name')->textInput()->label(false); ?>
                </div>
            </li>
            <li class="clearfix">
                <span class="title"><?= Yii::t('app.t2', 'E-mail:') ?></span>
                <div class="li_r">
                    <?= $form->field($model, 'email')->textInput()->label(false); ?>
                </div>
            </li>
            <li class="clearfix">
                <span class="title"><?= Yii::t('app.t2', 'Requirement:') ?></span>
                <div class="li_r">
                    <?= $form->field($model, 'details')->textarea(['style' => 'width:325px;height:100px;'])->label(false); ?>
                </div>
            </li>
            <li class="clearfix">
                <span class="title">&nbsp;</span>
                <div class="li_r">
                    <?= Html::submitInput(Yii::t('app.t2', 'Save'), ['name' => 'submit-button']) ?>
                </div>
            </li>
            <?php \yii\widgets\ActiveForm::end() ?>
        </ul>
    </div>
</div>

