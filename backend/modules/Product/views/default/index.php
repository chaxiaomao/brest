<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/16
 * Time: 11:31
 */
?>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span
            class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r"
                                                  style="line-height:1.6em;margin-top:3px"
                                                  href="javascript:location.replace(location.href);" title="刷新"><i
                class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="datadel()"
                                                               class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a
                    class="btn btn-primary radius" onclick="add('添加产品','/product/default/add')" href="javascript:;"><i
                        class="Hui-iconfont">&#xe600;</i> 添加产品</a></span> <span
                class="r">共有数据：<strong><?= count($model) ?></strong> 条</span>
    </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="40"><input name="" type="checkbox" value=""></th>
                <th width="80">ID</th>
                <th width="100">分类</th>
                <th width="150">封面</th>
                <th width="100">名称</th>
                <th width="60">发布状态</th>
                <th width="150">更新时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($model as $m) {
                if ($m->status == 0) {
                    echo '<tr class="text-c">
                    <td><input name="" type="checkbox" value=""></td>
                    <td>' . $m->id . '</td>
                    <td>' . $m->category->label . '</td>
                    <td><img width="150" class="picture-thumb" src="' . $m->img_path . '"></td>
                    <td>' . $m->label . '</td>
                    <td class="td-status"><span class="label label-success radius">已上架</span></td>
                    <td>' . $m->updated_at . '</td>
                    <td class="td-manage"><a style="text-decoration:none" onClick="turnoff(this,' . $m->id . ')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="edit(\'商品编辑\',\'/product/default/edit?id=' . $m->id . '\',' . $m->id . ')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="remove(this,' . $m->id . ')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                   </tr>';
                } else {
                    echo '<tr class="text-c">
                    <td><input name="" type="checkbox" value=""></td>
                    <td>' . $m->id . '</td>
                    <td>' . $m->category_id . '</td>
                    <td><img width="150" class="picture-thumb" src="' . $m->img_path . '"></td>
                    <td>' . $m->label . '</td>
                    <td class="td-status"><span class="label label-default radius">已下架</span></td>
                    <td>' . $m->updated_at . '</td>
                    <td class="td-manage"><a style="text-decoration:none" onClick="release(this,' . $m->id . ')" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a> <a style="text-decoration:none" class="ml-5" onClick="edit(\'商品编辑\',\'/product/default/edit?id=' . $m->id . '\',' . $m->id . ')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="remove(this,' . $m->id . ')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                   </tr>';
                }

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
    /*产品-添加*/
    function add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*产品-编辑*/
    function edit(title, url, id) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*产品-删除*/
    function remove(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.ajax({
                type: 'GET',
                url: '/product/default/remove?id=' + id,
                dataType: 'json',
                success: function (data) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000});
                },
                error: function (data) {
                    console.log(data.msg);
                },
            });
        });
    }

    /*产品-上架*/
    function release(obj, id) {
        layer.confirm('确认要上架吗？', function (index) {
            $.ajax({
                type: 'GET',
                url: '/product/default/status?type=on&id=' + id,
                dataType: 'json',
                success: function (data) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="turnoff(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已上架</span>');
                    $(obj).remove();
                    layer.msg('已上架!', {icon: 6, time: 1000});
                },
                error: function (data) {
                    console.log(data);
                },
            });
        });
    }

    /*产品-下架*/
    function turnoff(obj, id) {
        layer.confirm('确认要下架吗？', function (index) {
            $.ajax({
                type: 'GET',
                url: '/product/default/status?type=off&id=' + id,
                dataType: 'json',
                success: function (data) {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="release(this,id)" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
                    $(obj).remove();
                    layer.msg('已下架!', {icon: 6, time: 1000});
                },
                error: function (data) {
                    console.log(data);
                },
            });
        });
    }
</script>