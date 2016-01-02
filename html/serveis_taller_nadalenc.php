<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_TALLERNADALENC);
	$smarty->assign("frameContenido", "serveis_taller_nadalenc.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "3");
	$smarty->assign("subsubmenu", "3");
	$smarty->assign("seccion", "15");

	
	$smarty->display("home.tpl");
?>