<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */


$this->title = $model->title;
$this->registerCSs(".scd_m .scd_ml{width:100%;padding:0;border:none;}
.scd .scd_top span{color:#F9A519;border-bottom:3px solid #F9A519}.pst,.pst a{color:gray;}")
?>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="news clearfix">
        <div class="news_l">
            <div class="scd_top">
                <span><?= Yii::t('app.t2', 'Details') ?></span>
                <div class="pst">
                    <?= Yii::t('app.t2', 'Location') ?>：<a href="/"><?= Yii::t('app.t2', 'Home') ?></a> / <a
                            href="javascript:;"><?= Yii::t('app.t2', 'Details') ?></a>
                </div>
            </div>
        </div>
        <div class="scd_m clearfix">
            <div class="scd_ml">
                <h1><?= $model->title ?></h1>
                <div class="time">
                    <span><?= date('Y-m-d', strtotime($model->created_at)) ?></span>
                    <span><?= Yii::t('app.t2', 'source:') ?> <?= $model->source ?></span>
                    <span><?= Yii::t('app.t2', 'browser:') ?> <?= $model->view_count ?></span>
                    <div class="font">
                        <span><?= Yii::t('app.t2', 'font size:') ?></span>
                        <em class="on f_14">14px</em>
                        <em class="f_16">16px</em>
                        <em class="f_18">18px</em>
                    </div>
                </div>
                <div class="ctn">
                    <div class="des">
                        <p><?= $model->summary ?></p>
                    </div>
                    <div class="ctn_m">
                        <?= $model->content ?>
                    </div>
                </div>
            </div>
    </div>

</div>
