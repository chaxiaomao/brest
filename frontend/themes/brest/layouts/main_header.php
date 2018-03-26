<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 21:58
 */
$theme = $this->theme;
$this->registerCss(".panel{width:580px;}.header{background:#000;}.nav_m .er_m{background:#eee;}
.tel{text-align:right;color:gray;font-size:12px;margin-top:10px;}.qr{width:60px;height: 60px;margin-left:10px;}");
$assets = \frontend\themes\brest\AppAsset::register($this);
$categories = \common\models\entity\Category::find()->all();
?>
<!--头部-->
<div class="header">
    <div class="head clearfix">
        <div class="logo"><a href="/"><img src="<?= "$assets->baseUrl/images/logo.png" ?>" alt="公司名称"/></a></div>
        <div class="head_r clearfix">
            <div class="tel">Tel：0760-23309133/0760-23309136<img class="qr" src="<?= "$assets->baseUrl/images/site_qrcode.jpg" ?>" /></div>
            <form action="/search" method="get" class="search">
                <input name="tag" type="text">
                <input name="" type="submit" value="">
            </form>
            <div class="nav_m">
                <div class="n_icon"><?= Yii::t('app.t2', 'Nav') ?></div>
                <ul class="nav clearfix">
                    <li class="now"><a href="/"><?= Yii::t('app.t2', 'Home') ?></a></li>
                    <li class="er"><a href="/product"><?= Yii::t('app.t2', 'Products') ?></a></li>
                    <li><a href="/about-us"><?= Yii::t('app.t2', 'About us') ?></a></li>
                    <li><a href="/requirement"><?= Yii::t('app.t2', 'Sells and service') ?></a></li>
                    <li><a href="/contact-us"><?= Yii::t('app.t2', 'Contact us') ?></a></li>
                    <li><a href="/news"><?= Yii::t('app.t2', 'News') ?></a></li>
                </ul>
                <div class="er_m">
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
        </div>
    </div>
</div>
<!--头部-->
