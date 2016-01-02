<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_PUZZLEQUERIA);
	$smarty->assign("frameContenido", "serveis_puzzlequeria.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "3");
	$smarty->assign("subsubmenu", "7");
	$smarty->assign("seccion", "19");

	
	$smarty->display("home.tpl");
?>