<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */

use frontend\themes\brest\AppAsset;

$this->title = "Products";
$assets = AppAsset::register($this);
$this->registerCss(".des{padding-top:10px;padding-bottom:10px;text-align:center} .pdt a{width:100%;height:280px} .pdt a img{width: 200px;height:200px;}
.pages a{height:34px;}")
?>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="news clearfix">
        <div class="news_l">
            <div class="scd_top">
                <span>Products</span>
                <div class="pst">
                    <?= Yii::t('app.t2', 'Location') ?>：<a href="/"><?= Yii::t('app.t2', 'Home') ?></a> / <a href="javascript:;"><?= Yii::t('app.t2', 'Products') ?></a>
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
    <div class="space_hx">&nbsp;</div>
    <div class="pages">
        <?=
        \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
            'firstPageLabel' => 'First',
            'lastPageLabel' => 'Last',
        ]);
        ?>
    </div>

<!--    <div class="pages">-->
<!--        <a href="/product">首页</a>-->
<!--        <a href="">上一页</a>-->
<!--        <a href="">下一页</a>-->
<!--        <a href="">尾页</a>-->
<!--    </div>-->
</div>
