<?php
	header('Content-Type: text/html; charset=utf-8');

	require_once('classes/Config.php');
	require_once('classes/PHPErrorHandler.php');
	$config = new Config();
	set_error_handler('PHPErrorHAndler::handle');
	require_once('classes/HattrickSmarty.php');
	require_once('classes/HattrickPDO.php');

	$smarty = new HattrickSmarty();
	$content = "";

	$page =(isset($_GET['page'])) ? $_GET['page']: '';
	$action= (isset($_GET['action'])) ? $_GET['action']: '';
	$id= (isset($_GET['id'])) ? $_GET['id']: '';

	$smarty->debugging = false;

	// FRONT CONTROLLER
	switch ($page) {
		case 'home':
			# code...
			break;
		
		default:
			break;
	}

	$smarty->assign('page',$page);
	$smarty->assign('content',$content);
	$smarty->display('index.htm');

?>