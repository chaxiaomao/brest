<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 21:24
 */

use common\tools\Setting;

$theme = $this->theme;
$this->title = Setting::getSetting()->site_name;
$css = '
.i_name,.b_head span{color:gray !important;}.scd .scd_top span{color:#F9A519;border-bottom:3px solid #F9A519}.pst,.pst a{color:gray;}
.pdt-title .name{
    width: 100%;
    text-align: center;
    padding: 15px 0;
    color: #272727;
    font-size: 30px;
    font-weight: bold;
    }
.pdt-title .name p{
    height: 15px;
    line-height: 15px;
    font-size: 18px;
    color: #9B9B9B;
    font-weight: normal;
    }
';
$this->registerCss($css);



$assets = \frontend\themes\brest\AppAsset::register($this);

?>

<!--幻灯片-->
<?= \frontend\widgets\homepage\SliderWidget::widget([]) ?>
<!--幻灯片-->

<!--产品展示-->
<div class="space_hx">&nbsp;</div>
<div class="pdt-title">
    <div class="name">
        <?= Yii::t("app.t2", "Our industry") ?>
        <p><?= Yii::t("app.t2", "Products show") ?></p>
    </div>
    <div class="space_hx">&nbsp;</div>
</div>
<div class="pdt-w">
    <ul class="pdt-list">
        <?php
        foreach ($model as $m) {
            echo '<li>
                    <a href="/product/detail/id/'.$m->id.'"'.'>
                        <img src="'.$m->img_path.'" alt="">'.$m->label.'
                    </a>
                </li>';
        }

        ?>
        <div style="clear: both"></div>
    </ul>
</div>
<div class="space_hx">&nbsp;</div>
<!--产品展示-->

<!--宣传演示-->
<div class="i_mbr i_ma">
    <div class="b_head"><span><?= Yii::t("app.t2", "Campaign video") ?></span><?= Yii::t("app.t2", "Video") ?></div>
    <div class="space_hx">&nbsp;</div>
    <div class="tabBox_t">
        <div class="tabBox">
            <div class="tabCont" style="display:block;text-align: center;">
                <iframe id="video" height=498 width=720 src='http://player.youku.com/embed/XMzQ3NjYyODQzMg==' frameborder=0 'allowfullscreen'></iframe>
<!--                <iframe id="video"  src="http://www.haofangyuan.net/youku/videoyk.jsp?token=v&width=620&height=400&auto=no&id=XMzQ3NjYyODQzMg==" width="498" height="510" marginheight="0" marginwidth="0" frameborder="0" scrolling="no"></iframe>-->
            </div>
        </div>
    </div>
</div>
<!--宣传演示-->

<?php
$js='
    $(document).ready(function() {
        $("#home").addClass("now");
    });
';
$this->registerJs($js);
?>