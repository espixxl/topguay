<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_AVITIO);
	$smarty->assign("frameContenido", "serveis_avi_tio.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "1");
	$smarty->assign("subsubmenu", "4");
	$smarty->assign("seccion", "7");

	
	$smarty->display("home.tpl");
?>