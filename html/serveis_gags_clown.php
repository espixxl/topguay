<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_GAGSADULTS);
	$smarty->assign("frameContenido", "serveis_gags_clown.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "1");
	$smarty->assign("subsubmenu", "6");
	$smarty->assign("seccion", "9");

	
	$smarty->display("home.tpl");
?>