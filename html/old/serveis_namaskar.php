<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_NAMASKAR);
	$smarty->assign("frameContenido", "serveis_namaskar.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "4");
	$smarty->assign("subsubmenu", "1");
	$smarty->assign("seccion", "20");

	
	$smarty->display("home.tpl");
?>