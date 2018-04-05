<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 21:58
 */
$theme = $this->theme;
$assets = \frontend\themes\brest\AppAsset::register($this);
$categories = \common\models\entity\Category::find()->all();
$css = '
.panel{width:580px;}

.header{
    min-width:1000px;
    width: 1170px;
    height:217px;
    background:url('.$assets->baseUrl.'/images/home_bg_top.png);
    background-position:center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    }
    .header .head{height:100%;}
    .header .head .head_r{width:100%;}
    .navbar{position:absolute;top:10%;left:25%;float:left;text-align:left;}
    .navbar li {
        display: inline-block;
        zoom: 1;
        height: 92px;
        vertical-align: top;
    }
    .navbar li.now a, .head .navbar li a:hover {
        color: #F9A519;
    }
    .navbar li a {
        font-size: 12px;
        color: #fff;
        display: inline-block;
        zoom: 1;
        height: 17px;
        line-height: 17px;
        padding: 0px 15px;
        border-right: 1px solid #444;
        vertical-align: top;
        margin-top: 37px;
    }
    .tel{font-size:12px;color:#fff;}
    .qr_top_right{width:60px;height: 60px;}
    .top-right{padding-right:60px;padding-top:10px;}
    .search,.head_r,.top-right{text-align:right;}
    .ic-search{vertical-align: middle;width: 16px;margin-right:5px;margin-bottom:4px;}
    .er_m{position:absolute;background:#eee;left:30%;display:none;}
    ';
$this->registerCss($css);
?>
<!--头部-->
<div class="header head">
    <div class="top-right">
        <div class="tel">Tel：0760-23309133/0760-23309136</div>
        <img class="qr_top_right" src="<?= "$assets->baseUrl/images/site_qrcode.jpg" ?>">
    </div>
    <ul class="navbar clearfix">
        <li class="now"><a href="/"><?= Yii::t('app.t2', 'Home') ?></a></li>
        <li id="category" class="er"><a href="/product"><?= Yii::t('app.t2', 'Products') ?></a></li>
        <li><a href="/about-us"><?= Yii::t('app.t2', 'About us') ?></a></li>
        <li><a href="/requirement"><?= Yii::t('app.t2', 'Sells and service') ?></a></li>
        <li><a href="/contact-us"><?= Yii::t('app.t2', 'Contact us') ?></a></li>
        <li><a href="/news"><?= Yii::t('app.t2', 'News') ?></a></li>
        <li>
            <form action="/search" method="get" class="search">
                <input name="tag" placeholder="Search" type="text">
                <input name="" type="submit" value="">
                <img class="ic-search" src="<?= "$assets->baseUrl/images/ic_search.png" ?>">
            </form>
        </li>
    </ul>
    <div id="category_panel" class="er_m">
        <div class="hx">
            <i>&nbsp;</i>
            <div class="b_head">
                <?= Yii::t("app.t2", "Product") ?><em><?= Yii::t("app.t2", "category") ?></em>
            </div>
            <div class="container panel">
                <ul class="row">
                    <?php
                    foreach ($categories as $category) {
                        echo '<li class="col-md-3"><a href="/search/category/id/'.$category->id.'"'.'>'.$category->label.'</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--头部-->
<script type="text/javascript">
    $(function () {
        $("#category").hover(function () {
            $("#category_panel").show();
        });
        $("#category_panel").hover(function () {
            $("#category_panel").show();
        }, function () {
            $("#category_panel").hide();
        })
    })
</script>
