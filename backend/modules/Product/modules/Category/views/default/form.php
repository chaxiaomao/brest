<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/16
 * Time: 14:53
 */

use yii\helpers\Html;
$this->registerCss(".form-group{width:50%;}.cover-inp{display:none;}.upload-div{position:relative;}.upload-btn{
position:absolute;bottom:0;}");
?>
<div class="page-container">
    <?php if ($model->isNewRecord): ?>
        <?php
        $form =  \yii\widgets\ActiveForm::begin([
            'options' => [
                'id' => 'category_add_form',
                'class' => "form form-horizontal",
            ],
        ]);?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model,'label')->textInput(['class'=>'input-text'])->label(false);  ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类描述：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model,'description')->textInput(['class'=>'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <?= Html::submitButton('保存', ['class' => 'btn btn-primary radius', 'name' => 'submit-button']) ?>
            </div>
        </div>

        <?php \yii\widgets\ActiveForm::end() ?>
        <?php else: ?>
        <div class="page-container">
            <?php $form = \yii\widgets\ActiveForm::begin([
                'options' => [
                    "id" => "form-category-edit",
                    'class' => "form form-horizontal",
                ],
                'action' => '/product/category/default/update',
            ]); ?>
            <?= $form->field($model, 'id')->textInput()->label(false)->hiddenInput()->label(false) ?>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'label')->textInput(['id'=> 'label', 'class'=>'input-text' , 'required' => true,])->label(false) ?>
                </div>

            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类描述：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'description')->textInput(['id'=> 'description', 'class'=>'input-text' ,'required' => true,])->label(false) ?>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <?= Html::submitButton('保存', ['type' => 'button','id' => 'submit', 'class' => 'btn btn-primary radius']) ?>
                </div>
            </div>
            <?php \yii\widgets\ActiveForm::end() ?>
        </div>
    <?php endif; ?>

</div>