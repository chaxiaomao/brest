<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/14
 * Time: 23:13
 */

use common\tools\Setting;

$theme = $this->theme;
$this->registerCss(".link{color:#37c6c0;text-decoration:underline;}
.qr{position: absolute;top: -90px;left: 20px;width: 100px !important;height: 100px !important;display:none;}
.bq{height:30px;line-height:30px;}
");
$assets = \frontend\themes\brest\AppAsset::register($this);
?>
<div class="space_hx">&nbsp;</div>
<!--<div class="friend">-->
<!--    <div class="b_head"><span>--><?//= Yii::t("app.t2", "Friend link") ?><!--</span></div>-->
<!--    <div class="frd_m">-->
<!--        <a href="">Baidu</a>-->
<!--        <a href="">Alia</a>-->
<!--        <a href="">Google</a>-->
<!--        <a href="">Sina</a>-->
<!--    </div>-->
<!--</div>-->
<div class="fn_bg">
    <ul class="f_nav clearfix">
        <li>
            <a href="javascript:;">
                <span><?= Yii::t("app.t2", "Share website") ?></span>
            </a>
        </li>
        <li>
            <a href="<?= CHAT_ROOM_SITE ?>" target="_blank">
                <span><?= Yii::t("app.t2", "Online service") ?></span>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <span><?= Yii::t("app.t2", "More") ?></span>
            </a>
        </li>
        <li id="follow" style="position: relative;">
            <a href="javascript:;">
                <span><?= Yii::t("app.t2", "Follow us") ?></span>
            </a>
        </li>
    </ul>
</div>
<div class="bq"><?= Setting::getSetting()->site_copyright ?> </div>
<div class="bq">E-mail:
    <?php
        foreach (explode("/" ,Setting::getSetting()->site_email) as $email) {
            echo $email. " ";
        }
    ?>
</div>
<script type="text/javascript">
//    $("#follow").on("mouseover mouseout",function(event){
//        if(event.type == "mouseover"){
//            //鼠标悬浮
//            $("#qr").show();
//        }else if(event.type == "mouseout"){
//            //鼠标离开
//            $("#qr").hide();
//
//        }
//    })
</script>