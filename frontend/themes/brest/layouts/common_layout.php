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
<!--    <script>-->
<!--        var _hmt = _hmt || [];-->
<!--        (function() {-->
<!--            var hm = document.createElement("script");-->
<!--            hm.src = "https://hm.baidu.com/hm.js?7dd9def5876f2fabb9cc31c159c91183";-->
<!--            var s = document.getElementsByTagName("script")[0];-->
<!--            s.parentNode.insertBefore(hm, s);-->
<!--        })();-->
<!--    </script>-->
    <?php $this->head() ?>
</head>
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