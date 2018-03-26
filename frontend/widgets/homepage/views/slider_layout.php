<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/14
 * Time: 23:25
 */
$theme = $this->theme;
$assets = \frontend\themes\brest\AppAsset::register($this);
?>
<div id="banner" class="banner">
    <div id="owl-demo" class="owl-carousel">
        <a class="item" target="_blank" href="" style="background-image:url(/assets/9afad1a2/upload/banner.jpg)">
            <img src="<?= "$assets->baseUrl/upload/BAN1.jpg" ?>" alt="">
        </a>
        <a class="item" target="_blank" href="" style="background-image:url(/assets/9afad1a2/upload/banner.jpg)">
            <img src="<?= "$assets->baseUrl/upload/BAN2.jpg" ?>" alt="">
        </a>
        <a class="item" target="_blank" href="" style="background-image:url(/assets/9afad1a2/upload/banner.jpg)">
            <img src="<?= "$assets->baseUrl/upload/BAN3.jpg" ?>" alt="">
        </a>
    </div>
</div>

