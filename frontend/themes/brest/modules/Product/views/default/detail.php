<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */

use frontend\themes\brest\AppAsset;

$assets = AppAsset::register($this);
$this->title = $model->label;
$this->registerCss(".mainPhoto .go li .tu, .mainPhoto .go li .tu img{height:100%}
.scd .scd_top span{color:#F9A519;border-bottom:3px solid #F9A519}.pst,.pst a{color:gray;}");
?>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="news clearfix">
        <div class="news_l">
            <div class="scd_top">
                <span><?= Yii::t('app.t2', 'Product overview') ?></span>
                <div class="pst">
                    <?= Yii::t('app.t2', 'Location') ?>：<a href="/"><?= Yii::t('app.t2', 'Home') ?></a> / <a href="javascript:;"><?= Yii::t('app.t2', 'Product') ?></a> / <a href="javascript:;"><?= $model->label ?></a>
                </div>
            </div>
            <div class="new_m">
                <div class="box mainPhoto"> <span class="goleft nextPage"><a href="javascript:void(0)"><img src="<?= "$assets->baseUrl/images/prev.png" ?>"/></a></span>
                    <div class="go slidegrid">
                        <ul class="slideitems">
                            <li>
                                <div class="tu"><a href="news_d.html"><img src="<?= $model->img_path ?>" alt=""/></a></div>
                            </li>
                        </ul>
                    </div>
                    <span class="goright prevPage"><a href="javascript:void(0)"><img src="<?= "$assets->baseUrl/images/next.png" ?>" /></a></span> </div>
                <script>
                    $(function(){
                        $('.mainPhoto .slidegrid').scrollable({size:1,circular:true,next:'.nextPage',prev:'.prevPage'}).autoscroll();
                    });
                </script>
            </div>
        </div>
        <div class="news_r">
            <div class="scd_top">
                <span><?= Yii::t('app.t2', 'Product detail') ?></span>
            </div>
            <div class="new_m">
                <div class="n_m">
                    <div class="des">
                        <p><?= Yii::t('app.t2', 'MODEL') ?>：<?= $model->model ?></p>
                        <p><?= Yii::t('app.t2', 'POWER') ?>：<?= $model->power ?></p>
                        <p><?= Yii::t('app.t2', 'CARTON SIZE') ?>： <?= $model->carton_size ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space_hx">&nbsp;</div>
</div>
