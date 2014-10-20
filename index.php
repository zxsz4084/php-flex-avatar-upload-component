<?php
define('WEB_URI','http://'.$_SERVER['HTTP_HOST']);

$file = 'avatar_with_bg';
if(isset($_GET['style']) && $_GET['style']='mblog'){
	$file = 'avatar_mblog';
}

$init_file = 'init2';
include('view.php');