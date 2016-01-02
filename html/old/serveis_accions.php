<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_ACCIONS);
	$smarty->assign("frameContenido", "serveis_accions.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "2");
	$smarty->assign("subsubmenu", "3");
	$smarty->assign("seccion", "11");

	
	$smarty->display("home.tpl");
?>