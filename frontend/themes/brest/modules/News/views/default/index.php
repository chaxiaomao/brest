<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */
$this->title = "News";
$this->registerCss(".w100{width:100% !important;} .w100 p{text-indent:2em}.pages a{height:34px;}")
?>
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="news clearfix">
        <div class="news_l">
            <div class="scd_top">
                <span>News</span>
                <div class="pst">
                    <?= Yii::t('app.t2', 'Location') ?>：<a href="/"><?= Yii::t('app.t2', 'Home') ?></a> / <a
                            href="javascript:;"><?= Yii::t('app.t2', 'News') ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="scd_m clearfix news">
        <?php
            foreach ($model as $m) {
                echo '<div class="new_m">
                        <div class="n_m">
                            <div class="title">
                                <span>'.date("Y-m-d", strtotime($m->created_at)).'</span>
                                <p class="name"><a href="/news/detail/id/'.$m->id.'"'.'>'.$m->title.'</a></p>
                            </div>
                            <div class="des">
                                '.$m->summary.'
                            </div>
                        </div>
                    </div>';
            }
        ?>

    </div>
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
</div>