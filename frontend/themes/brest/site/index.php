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
$this->registerCss(".des{padding-top:10px;padding-bottom:10px;text-align:center} 
.pdt a{width:100%;height:280px} .pdt a img{width: 200px;height:200px;}
.i_name,.b_head span{color:gray !important;}.scd .scd_top span{color:#F9A519;border-bottom:3px solid #F9A519}.pst,.pst a{color:gray;}")
?>

<!--幻灯片-->
<?= \frontend\widgets\homepage\SliderWidget::widget([]) ?>
<!--幻灯片-->

<!--产品展示-->
<div class="space_hx">&nbsp;</div>
<div class="i_ma">
    <div class="i_name">
        <?= Yii::t("app.t2", "Our industry") ?>
        <p><?= Yii::t("app.t2", "Products show") ?></p>
    </div>
    <div class="space_hx">&nbsp;</div>
</div>
<div class="container pdt">
    <ul class="row">
        <?php
            foreach ($model as $m) {
                echo '<li class="col-md-3">
                        <a href="/product/detail/id/'.$m->id.'"'.' class="thumbnail">
                            <img src="'.$m->img_path.'" alt=""/>
                            <div class="des">
                                '.$m->label.'
                            </div>
                        </a>
                    </li>';
            }

        ?>
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
<!--                width="720" height="560"-->
<!--                <iframe height=498 width=510 src='http://player.youku.com/embed/XMzQ3NjYyODQzMg==' frameborder=0 'allowfullscreen'></iframe>-->
                <embed id="video" src="http://player.youku.com/player.php/sid/XMzQ3NjYyODQzMg==/v.swf" quality="high" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></embed>

            </div>
        </div>
    </div>
</div>
<!--宣传演示-->

<script language="javascript">
    $(function(){

        if(navigator.userAgent.match(/mobile/i)) {
            var width = window.screen.width;
            $("#video").width(320).height(300);
        } else {
            $("#video").width(720).height(500);
        }

        $('#owl-demo').owlCarousel({
            items: 1,
            navigation: true,
            navigationText: ["上一个","下一个"],
            autoPlay: true,
            stopOnHover: true
        }).hover(function(){
            $('.owl-buttons').show();
        }, function(){
            $('.owl-buttons').hide();
        });
    });
</script>