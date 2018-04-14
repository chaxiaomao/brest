<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 21:56
 */

use yii\helpers\Html;
\backend\themes\hui\UeditorAsset::register($this);
?>
<div class="page-container">
    <?php if ($model->isNewRecord): ?>
        <?php
        $form = \yii\widgets\ActiveForm::begin([
            'options' => [
                'id' => 'news_add_form',
                'class' => "form form-horizontal",
            ],
        ]); ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'title')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>摘要：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'summary')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>作者：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'author')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>来源：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'source')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"></span>浏览次数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'view_count')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章内容：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="row cl">
                    <div class="formControls col-xs-8 col-sm-9">
                        <?php echo '<script id="editor" type="text/plain" style="width:100%;height:400px;"></script>' ?>
                        <div style="display: none">
                            <?= $form->field($model, 'content')->textInput(['id' => 'content'])->label(false); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
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
                    'options' => [
                        'id' => 'news_add_form',
                        'class' => "form form-horizontal",
                    ],
                ],
                'action' => '/news/default/add',
            ]); ?>
            <?= $form->field($model, 'id')->textInput()->label(false)->hiddenInput()->label(false) ?>

            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'title')->textInput(['class' => 'input-text'])->label(false); ?>
                </div>
            </div>
            <br/>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>摘要：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'summary')->textInput(['class' => 'input-text'])->label(false); ?>
                </div>
            </div>
            <br/>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>作者：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'author')->textInput(['class' => 'input-text'])->label(false); ?>
                </div>
            </div>
            <br/>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>来源：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'source')->textInput(['class' => 'input-text'])->label(false); ?>
                </div>
            </div>
            <br/>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"></span>浏览次数：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <?= $form->field($model, 'view_count')->textInput(['class' => 'input-text'])->label(false); ?>
                </div>
            </div>
            <br/>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章内容：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <div class="row cl">
                        <div class="formControls col-xs-8 col-sm-9">
                            <?php echo '<script id="editor" type="text/plain" style="width:100%;height:400px;"></script>' ?>
                            <div style="display: none">
                                <?= $form->field($model, 'content')->textInput(['id' => 'content'])->label(false); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <?= Html::submitButton('保存', ['class' => 'btn btn-primary radius', 'name' => 'submit-button']) ?>
                </div>
            </div>
            <?php \yii\widgets\ActiveForm::end() ?>
        </div>
    <?php endif; ?>

</div>

<script type="text/javascript">
    var ue = UE.getEditor('editor');
    ue.addListener("blur",function(){
        var arr =(UE.getEditor('editor').getContent());
        $("#content").val(arr);
    });
    ue.addListener("ready", function () {
        // editor准备好之后才可以使用
        ue.setContent($("#content").val());
    });

</script>