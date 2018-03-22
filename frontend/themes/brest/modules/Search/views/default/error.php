<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$this->registerCss(".w100{width:100% !important;} .w100 p{text-indent:2em}")
?>
<div class="banner banner_s">
    <div class="w100 panel panel-default">
        <div class="panel-body">
            <p><?= Yii::t('app.t2', 'Product not found') ?></p>
        </div>
    </div>
</div>