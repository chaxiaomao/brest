<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/13
 * Time: 21:30
 */
/* @var $this \yii\web\View */
/* @var $content String */

use common\tools\Setting;
use frontend\themes\brest\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->registerMetaTag(['name' => 'keywords', 'content' => Setting::getSetting()->site_keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => Setting::getSetting()->site_description]);
$this->registerCss("a:link{text-decoration:none;}a:hover{text-decoration:none;}")
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
<!--    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="x5-orientation" content="portrait">
    <?= Setting::getSetting()->site_statistics_code ?>
    <link type="image/x-icon" href="/brest.ico" rel="shortcut icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>
    .pdt-w,.pdt-title{width:1170px;margin:0 auto;}
    .pdt-w a{color:gray;font-size:24px;line-height:2;}
    .pdt-w a:hover{color:#F9A519;}
    .pdt-w img{width: 200px;height:150px;display:block;}
    .pdt-list{width:1000px;margin:0 auto;}
    .pdt-list li{display:inline-block;float:left;margin:20px;text-align:center;background:#fff;}
</style>
<body style="background-color: black;">
    <?php $this->beginBody() ?>
    <?=
        $this->render("main_header.php", [])
    ?>
    <?=
        $this->render('main_content.php', ['content' => $content,])
    ?>
    <?=
        $this->render("main_footer.php", [])
    ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>