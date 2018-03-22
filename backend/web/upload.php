<?php
/**
 * Created by PhpStorm.
 * User: CX
 * Date: 2018/3/17
 * Time: 14:23
 */

//对应FomData中的文件命名
$upload_file_name = 'imgFile';
$filename = $_FILES[$upload_file_name]['name'];
//名字转换成gb2312处理
$gb_filename = iconv('utf-8', 'gb2312', $filename);
//获取后缀格式
$ext = end(explode(".", $gb_filename));

//文件上传根目录
$dir_base = "../../images/upload/";
//图片命名
$save_name = time() . "." . $ext;

if (!file_exists($dir_base)) {
    mkdir($dir_base, '0777', true);
}


if (!file_exists($dir_base . $save_name)) {
    $isMoved = false;  //默认上传失败
    //文件大小限制    1M = 1 * 1024 * 1024 B;
    $MAXIMUM_FILESIZE = 2 * 1024 * 1024;
    $rEFileTypes = "/^\.(jpg|jpeg|gif|png){1}$/i";
    if ($_FILES[$upload_file_name]['size'] <= $MAXIMUM_FILESIZE &&
        preg_match($rEFileTypes, strrchr($save_name, '.'))) {
        //上传文件
        $isMoved = @move_uploaded_file($_FILES[$upload_file_name]['tmp_name'], $dir_base . $save_name);
    }
} else {
    //已存在文件设置为上传成功
    $isMoved = true;
}
if ($isMoved) {
    echo $save_name;
}
?>