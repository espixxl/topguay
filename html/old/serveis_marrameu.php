<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_MARRAMEU);
	$smarty->assign("frameContenido", "serveis_marrameu.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "1");
	$smarty->assign("subsubmenu", "3");
	$smarty->assign("seccion", "6");

	
	$smarty->display("home.tpl");
?>