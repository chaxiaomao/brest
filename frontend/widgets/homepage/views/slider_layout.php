<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/14
 * Time: 23:25
 */
$theme = $this->theme;
$assets = \frontend\themes\brest\AppAsset::register($this);
$css = '
.swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #000;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-container-v {
        background: #eee;
    }
    .banner img{width:95%;}';
$this->registerCss($css);
?>
<!-- Swiper -->
<div id="banner" class="banner">
    <div class="swiper-container swiper-container-h">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?= "$assets->baseUrl/upload/BAN1.jpg" ?>" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?= "$assets->baseUrl/upload/BAN2.jpg" ?>" alt="">

            </div>
            <div class="swiper-slide">
                <img src="<?= "$assets->baseUrl/upload/BAN3.jpg" ?>" alt="">

            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-h"></div>
    </div>
</div>

<!-- Initialize Swiper -->
<script>
    var swiperH = new Swiper('.swiper-container-h', {
        pagination: '.swiper-pagination-h',
        paginationClickable: true,
        spaceBetween: 50,
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        loop: true
    });
</script>