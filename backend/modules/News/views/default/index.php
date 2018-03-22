<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 21:34
 */
?>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a class="btn btn-primary radius" data-title="添加资讯" data-href="article-add.html" onclick="add('添加咨询', '/news/default/add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong><?= count($model) ?></strong> 条</span> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="70">ID</th>
                <th width="120">标题</th>
                <th>摘要</th>
                <th width="120">作者</th>
                <th width="150">创建时间</th>
                <th width="120">来源</th>
                <th width="120">浏览次数</th>
                <th width="160">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($model as $m) {
                echo '<tr class="text-c">
                        <td><input name="" type="checkbox" value=""></td>
                        <td>'.$m->id.'</td>
                        <td class="text-l">'.$m->title.'</td>
                        <td class="text-l">'.$m->summary.'</td>
                        <td class="text-l">'.$m->author.'</td>
                        <td class="text-l">'.$m->created_at.'</td>
                        <td class="text-l">'.$m->source.'</td>
                        <td class="text-l">'.$m->view_count.'</td>
                        <td class="f-14 product-brand-manage"><a style="text-decoration:none" onClick="edit(\'咨询编辑\',\'/news/default/edit?id='.$m->id.'\','.$m->id.')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="remove(this,'.$m->id.')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                    </tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            //{"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
        ]
    });
    /*分类-添加*/
    function add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*分类-编辑*/
    function edit(title,url,id){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*分类-删除*/
    function remove(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type: 'GET',
                url: '/news/default/remove?id=' + id,
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
</script>