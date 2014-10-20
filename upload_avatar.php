<?php
/** 
 * @desc  flash上传头像处理程序  
 * 
 * 图片类型image_type 
 * 图片名称big_avatar_name 
 * 图片内容big_avatar
 * 注意小图参数为little_avatar不是small_avatar
 * @author chenlong
 * @date  2011-08-14
*/
header("text/html;charset=UTF-8");
$big_file_data = base64_decode($_POST['big_avatar']);
$middle_file_data = base64_decode($_POST['middle_avatar']);
$little_avatar_data = base64_decode($_POST['little_avatar']);
if (!empty($big_file_data)){
	$upload_path = dirname(__FILE__).'/upload/';
	file_put_contents($upload_path."big_avatar.jpg", $big_file_data);
	file_put_contents($upload_path."middle_avatar.jpg", $middle_file_data);
	file_put_contents($upload_path."little_avatar.jpg", $little_avatar_data);
	header("Content-Type: text/xml");
	exit('200');
}else{
	exit("can't visit this file directly!");
}
?>
