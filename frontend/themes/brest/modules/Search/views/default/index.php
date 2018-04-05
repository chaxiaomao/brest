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
$css = '
.des{padding-top:10px;padding-bottom:10px;text-align:center} 
.pdt a{width:100%;height:280px} .pdt a img{width: 200px;height:200px;}
.scd .scd_top span{color:#F9A519;border-bottom:3px solid #F9A519}.pst,.pst a{color:gray;}

';
$this->registerCss($css)

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
