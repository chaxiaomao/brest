<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */
$this->title = "About us";
$assets = \frontend\themes\brest\AppAsset::register($this);

$css = '
.container1170{width:1170px;margin:0 auto;}
.w100{width:100% !important;margin-top:10px;} 
.w100 p{text-indent:2em}
.about-us{width:100%;}
.about-img1{display:inline-block; background-size: cover; background-image:url('.$assets->baseUrl.'/images/contact_img_1.jpg);width:360px;height:360px;margin:10px;background-position:center;background-repeat:no-repeat;}
.about-img2{display:inline-block; background-size: cover; background-image:url('.$assets->baseUrl.'/images/contact_img_2.jpg);width:360px;height:360px;margin:10px;background-position:center;background-repeat:no-repeat;}
.about-img3{display:inline-block; background-size: cover; background-image:url('.$assets->baseUrl.'/images/contact_img_3.jpg);width:360px;height:360px;margin:10px;background-position:center;background-repeat:no-repeat;}
.about-img4{display:inline-block; background-size: cover; background-image:url('.$assets->baseUrl.'/images/contact_img_4.jpg);width:360px;height:360px;margin:10px;background-position:center;background-repeat:no-repeat;}
.about-img5{display:inline-block; background-size: cover; background-image:url('.$assets->baseUrl.'/images/contact_img_5.jpg);width:360px;height:360px;margin:10px;background-position:center;background-repeat:no-repeat;}
.about-img6{display:inline-block; background-size: cover; background-image:url('.$assets->baseUrl.'/images/contact_img_6.jpg);width:360px;height:360px;margin:10px;background-position:center;background-repeat:no-repeat;}
';
$this->registerCss($css);
?>
<div class="container1170">
    <div class="w100 panel panel-default">
        <div class="panel-body">
            <p>BREST turns out to be a new leading OEM/ODM manufacturer of small electronic appliances. The Company is
                based in Zhongshan, Guangdong, China. At present, our products have covered but not limit to induction
                cooker, halogen cooker, stainless Jug Kettle,Contact Grill, exporting all over the world. covering 38
                acres, 22000 squaremeters area, more than 8 million USD in assets investment, the annual output value is
                about 24 million USD. Our products have been certified by CB, CE, GS,ROHS, SAA, SASO, EMC， EMF， LVD，
                JQA, PSE,FCC,UL,ETL，ISO9000:2000 etc. BSCI certificated manufacturer.</p>
            <br>
            <p>Our company has over one thousand of employees, including 48 medium and senior professional
                technologists, 3 masters and 1 doctor. The operations from mould developing injection to electrocircuit
                design, inspection and assembling can be independently performed by ourselves. In 2005, our company has
                imported 3 sets of ACT on-line tester from Germany and automatic crest welder and automatic angle cutter
                from Japan. Our company posses 8 fully automatic assembling lines, dryburning and ageing lines and
                automatic pushing lines.</p>
            <br>
            <p>Up to now, BREST has become an outstanding player in the global stage with its powerful R&D
                strengthens,advanced marketing consciousness and services, high qualified staff members and various
                sophisticated appliances.</p>
        </div>
    </div>
</div>
<div class="container1170">
    <div style="text-align: center">
        <div class="about-img1" ></div>
        <div class="about-img2" ></div>
        <div class="about-img3" ></div>
    </div>
    <div style="text-align: center">
        <div class="about-img4" ></div>
        <div class="about-img5" ></div>
        <div class="about-img6" ></div>
    </div>
</div>
<div class="container1170">
    <div class="w100 panel panel-default">
        <div class="panel-body">
            <p>Live-action picture of Brest</p>
        </div>
    </div>
</div>
<div class="container1170">
    <img style="width:100%;" src="<?= "$assets->baseUrl/images/contact_img_7.jpg" ?>" />
</div>
<div class="container1170">
    <div class="w100 panel panel-default">
        <div class="panel-body">
            <p>The certification we have got</p>
        </div>
    </div>
</div>
<?php
$js='
    $(document).ready(function() {
        $("#about").addClass("now");
    });
';
$this->registerJs($js);
?>