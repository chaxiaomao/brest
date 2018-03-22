<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/16
 * Time: 23:41
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerCss(".form-group{width:50%;}.cover-inp{display:none;}.upload-div{position:relative;}.upload-btn{
position:absolute;bottom:0;}");
?>
<div class="page-container">
    <?php if ($model->isNewRecord): ?>
        <?php
        $form = \yii\widgets\ActiveForm::begin([
            'options' => [
                'id' => 'product_add_form',
                'class' => "form form-horizontal",
                'enctype' => 'multipart/form-data'
            ]
        ]); ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'label')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'category_id')->dropDownList($arr, ['class' => 'select input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'model')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>功率：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'power')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>机箱尺寸：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'carton_size')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>图片：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="upload-div">
                    <img id="preview" style="width: 150px;height: 150px;" src="/images/ic_add.png" onclick="selectImg()">
                    <button id="img-upload" style="display: none" type="button" class="btn btn-success upload-btn"  onclick="imgUpload()">开始上传</button>
                </div>
                <span id="upload_tip"></span>
                <input class="cover-inp" type="file" id="imgFile" name="imgFile" value="" title="上传图片" onchange="imgPreview(this)" />
                <?= $form->field($model, 'img_path')->textInput(['id' => 'cover_path'])->label(false) ?>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <?= Html::submitButton('保存', ['class' => 'btn btn-primary radius', 'name' => 'submit-button']) ?>
            </div>
        </div>

        <?php \yii\widgets\ActiveForm::end() ?>
    <?php else:?>
        <?php
        $form = \yii\widgets\ActiveForm::begin([
            'options' => [
                'id' => 'product_add_form',
                'class' => "form form-horizontal",
                'enctype' => 'multipart/form-data',
            ],
            'action' => '/product/default/update',
        ]); ?>
        <?= $form->field($model, 'id')->textInput()->hiddenInput()->label(false); ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'label')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'category_id')->dropDownList($arr, ['class' => 'select input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模型：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'model')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>功率：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'power')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>机箱尺寸：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?= $form->field($model, 'carton_size')->textInput(['class' => 'input-text'])->label(false); ?>
            </div>
        </div>
        <br/>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>图片：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="upload-div">
                    <img id="preview" style="width: 150px;height: 150px;" src="<?= $model->img_path ?>" onclick="selectImg()" />
                    <button id="img-upload" style="display: none" type="button" class="upload-btn btn btn-success"  onclick="imgUpload()">开始上传</button>
                </div>
                <span id="upload_tip"></span>
                <input class="cover-inp" type="file" id="imgFile" name="imgFile" value="" title="上传图片" onchange="imgPreview(this)" />
                <?= $form->field($model, 'img_path')->textInput(['id' => 'cover_path'])->label(false) ?>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <?= Html::submitButton('保存', ['class' => 'btn btn-primary radius', 'name' => 'submit-button']) ?>
            </div>
        </div>

        <?php \yii\widgets\ActiveForm::end() ?>
    <?php endif; ?>

</div>
<script type="text/javascript">
    function selectImg() {
        //触发选择文件的伪点击事件,一定要return
        return $("#imgFile").click();
    }
    //选择图片回显
    function imgPreview(fileDom){
        //判断是否支持FileReader
        if (window.FileReader) {
            var reader = new FileReader();
        } else {
            alert("您的设备不支持图片预览功能，如需该功能请升级您的设备！");
        }

        //获取文件
        var file = fileDom.files[0];
        var imageType = /^image\//;
        //是否是图片
        if (!imageType.test(file.type)) {
            alert("请选择图片！");
            return;
        }
        //读取完成
        reader.onload = function(e) {
            //获取图片dom
            var img = document.getElementById("preview");
            //图片路径设置为读取的图片
            img.src = e.target.result;
        };
        reader.readAsDataURL(file);
        $("#img-upload").show();
    }

    function imgUpload() {
        //创建FormData对象
        var data = new FormData();
        data.append("imgFile", document.getElementById("imgFile").files[0]);
        //提交
        $.ajax({
            url: '/upload.php',
            type: 'post',
            data: data,
            cache: false,
            contentType: false,        /*不可缺*/
            processData: false,         /*不可缺*/
            success:function(data){
                if (data) {
//                    $("#cover_path").val('<?//= IMAGE_SITE."/" ?>//'+data);
                    $("#cover_path").val('<?= IMAGE_SITE."/" ?>'+data);
                    $("#upload_tip").text("上传成功");
                }
            },
            error:function(){
                alert('上传出错');
            }
        });
    }


</script>
