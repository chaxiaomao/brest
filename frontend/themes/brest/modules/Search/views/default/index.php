<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */

use frontend\themes\brest\AppAsset;

$this->title = 'Products';
$assets = AppAsset::register($this);
$this->registerCss(".des{padding-top:10px;padding-bottom:10px;text-align:center} .pdt a{width:100%;height:280px} .pdt a img{width: 200px;height:200px;}")

?>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="news clearfix">
        <div class="news_l">
            <div class="scd_top">
                <span><?= Yii::t('app.t2', 'Products') ?></span>
                <div class="pst">
                    <?= Yii::t('app.t2', 'Location') ?>：<a href="/"></a> <?= Yii::t('app.t2', 'Home') ?> / <a href="javascript:;"></a> <?= Yii::t('app.t2', 'Product') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="space_hx">&nbsp;</div>
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
</div>
