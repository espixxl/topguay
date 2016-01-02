<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_FESTESTEMATIQUES);
	$smarty->assign("frameContenido", "serveis_festes_tematiques.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "3");
	$smarty->assign("subsubmenu", "6");
	$smarty->assign("seccion", "18");

	
	$smarty->display("home.tpl");
?>