<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_PERSONATGES);
	$smarty->assign("frameContenido", "serveis_personatges_populars.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "2");
	$smarty->assign("subsubmenu", "2");
	$smarty->assign("seccion", "10");

	
	$smarty->display("home.tpl");
?>