<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/18
 * Time: 10:59
 */

use common\tools\Setting;

$cache = \Yii::$app->cache;
if ($cache->exists('setting')) {
    $setting = $cache->get('setting');
} else {
    $cache->add('setting', [
        'site_name' =>  "",
        'site_keywords' =>  "",
        'site_description' =>  "",
        'site_copyright' =>  "",
        'site_ipc' => "",
        'site_email' => "",
        'site_statistics_code' => "",
    ]);
}

?>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
    <span class="c-gray en">&gt;</span>
    系统管理
    <span class="c-gray en">&gt;</span>
    基本设置
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
       href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <form action="/system/setting/default/cache" method="post" class="form form-horizontal" id="form-article-add">
        <input name="_csrf-backend" type="hidden" id="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
        <div id="tab-system" class="HuiTab">
            <div class="tabBar cl">
                <span>基本设置</span>
                <span>安全设置</span>
                <span>其他设置</span>
            </div>
            <div class="tabCon">

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">
                        <span class="c-red">*</span>
                        网站名称：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="site_name" placeholder="控制在25个字、50个字节以内" value="<?=  Setting::getSetting()->site_name ?>" class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">
                        <span class="c-red">*</span>
                        关键词：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="site_keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="<?= Setting::getSetting()->site_keywords ?>"
                               class="input-text">

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">
                        <span class="c-red">*</span>
                        描述：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="site_description" placeholder="空制在80个汉字，160个字符以内" value="<?= Setting::getSetting()->site_description ?>"
                               class="input-text">

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">
                        <span class="c-red">*</span>
                        底部版权信息：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="site_copyright" placeholder="&copy; 2016 Brest" value="<?= Setting::getSetting()->site_copyright ?>"
                               class="input-text">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>备案号：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="site_ipc" placeholder="京ICP备00000000号" value="<?= Setting::getSetting()->site_ipc ?>" class="input-text">

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站邮箱：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" name="site_email" placeholder="多个邮箱用分割符号/隔开如：xx@126.com/xx@163.com" value="<?= Setting::getSetting()->site_email ?>" class="input-text">

                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">统计代码：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <textarea name="site_statistics_code" class="textarea"><?= Setting::getSetting()->site_statistics_code ?></textarea>
                    </div>
                </div>
            </div>
            <div class="tabCon">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">允许访问后台的IP列表：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <textarea class="textarea" name="" id=""></textarea>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2">后台登录失败最大次数：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="text" class="input-text" value="5" id="" name="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"> 保存</button>

                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;
                </button>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        $(function () {
            $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox-blue',
                radioClass: 'iradio-blue',
                increaseArea: '20%'
            });
            $.Huitab("#tab-system .tabBar span", "#tab-system .tabCon", "current", "click", "0");
        });
    </script>