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
.bq{height:30px;line-height:30px;}
.fn_bg .f_nav li span{color:#444;}
.head .search input[type=\"text\"]{padding-left:10px;}
");
$assets = \frontend\themes\brest\AppAsset::register($this);
?>
<div class="space_hx">&nbsp;</div>
<div class="fn_bg">
    <ul class="f_nav clearfix">
        <li>
            <a href="javascript:;">
                <span><?= Yii::t("app.t2", "Share website") ?></span>
            </a>
        </li>
        <li>
            <a href="http://p.qiao.baidu.com/cps/chat?siteId=11866849&userId=25420365" target="_blank">
                <span style="color:#eee;"><?= Yii::t("app.t2", "Online service") ?></span>
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
