<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_TALLERSMEDIEVALS);
	$smarty->assign("frameContenido", "serveis_taller_medievals.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "3");
	$smarty->assign("subsubmenu", "5");
	$smarty->assign("seccion", "17");

	
	$smarty->display("home.tpl");
?>