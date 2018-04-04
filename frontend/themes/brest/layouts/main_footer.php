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
            <a href="<?= CHAT_ROOM_SITE ?>" target="_blank">
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
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?7dd9def5876f2fabb9cc31c159c91183";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
