<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */
$this->registerCss("html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}");
$this->title = "Contact us";
?>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>

<!--百度地图容器-->
<div class="banner banner_s">
    <div style="width:100%;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
</div>

<!--公司简介-->
<div class="space_hx">&nbsp;</div>
<div class="scd clearfix">
    <div class="scd_top">
        <div class="s_nav">
            <a href="javascript:void(0)" class="active"><span><?= Yii::t("app.t2", "Company summary") ?></span></a>
        </div>
        <div class="pst">
            <?= Yii::t("app.t2", "Current:") ?> <a href="/"><?= Yii::t("app.t2", "Home") ?></a> / <a href="javascript:void(0)"><?= Yii::t("app.t2", "Contact us") ?></a>
        </div>
    </div>
    <div class="about">
        <p>Contact way</p>
        <p>location:广东省中山市黄圃镇大岑工业区成业大道尾101号中山市布雷斯特电器有限公司.</p>
        <p>Tel:0760-23309133/0760-23309136.</p>
    </div>
</div>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.361459,22.764122);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }


    initMap();//创建和初始化地图
</script>
