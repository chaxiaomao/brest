<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/15
 * Time: 10:43
 */

use yii\web\View;

$this->registerCss("html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    .about p{color: gray;}.scd .scd_top span{color:#F9A519;border-bottom:3px solid #F9A519}.pst,.pst a{color:gray;}");
$this->title = "Contact us";
//$this->registerJsFile("http://api.map.baidu.com/api?v=2.0&ak=UX6M0k7yeOSB22nMMdXzemvqIWlK7BYm");
?>
<!--<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=UX6M0k7yeOSB22nMMdXzemvqIWlK7BYm"></script>

<!--百度地图容器-->
<!--百度地图容器-->
<div style="width: 100%;">
    <div style="width:700px;height:550px;border:#ccc solid 1px;font-size:12px;margin: 0 auto" id="map"></div>

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
        <p>location：Brest Electrical Appliances Co., Ltd
            Address:No.101 Chengye Ave, Dacen Industrial Zone, Huangpu Town,Zhongshan, China</p>
        <p>Tel：0760-23309133/0760-23309136</p>
        <p>E-mail：candice@brest-china.com</p>
    </div>
</div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
        map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(113.361459,22.764122),18);
    }
    function setMapEvent(){
        map.enableKeyboard();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
        var markers = [
            {content:"我的备注",title:"Brest",imageOffset: {width:0,height:3},position:{lat:22.763914,lng:113.361216}}
        ];
        for(var index = 0; index < markers.length; index++ ){
            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
            })});
            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
            var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
            };
            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
            marker.setLabel(label);
            addClickHandler(marker,infoWindow);
            map.addOverlay(marker);
        };
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
        map.addControl(overviewControl);
    }
    var map;
    initMap();
</script>
