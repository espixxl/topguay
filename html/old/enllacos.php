<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_ENLLACOS);
	$smarty->assign("frameContenido", "enllacos.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "5");
	$smarty->assign("subsubmenu", "0");
	$smarty->assign("seccion", "22");

	
	$smarty->display("home.tpl");
?>