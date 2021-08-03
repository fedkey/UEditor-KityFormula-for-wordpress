<?php
/*---------------------------
 * action_delete.php
 * 删除 ueditor 目录下的文件
 *---------------------------*/

function safe_replace($string)
{
    $string = trim($string);
    $string = str_replace(array('\\', ';', '\'', '%2527', '%27', '%20', '&', '"', '<', '>'), array('', '', '', '', '', '', '&amp;', '&quot;', '&lt;', '&gt;'), $string);
    $string = nl2br($string);
    return $string;
}

try {
    $path = safe_replace($_POST['path']);
	$file = $path;
    //获取完整路径
    $path = $_SERVER['DOCUMENT_ROOT'] . $path;

    if (file_exists($path)) {
        //删除文件
        unlink($path);
        if (!file_exists($path)){
            return '删除成功';
        }else{
            return 'error';
        }


    } else {
        return '删除失败，未找到' . $file;
    }

} catch (Exception $e) {
    return '删除异常：' . $e->getMessage();
}

?>
