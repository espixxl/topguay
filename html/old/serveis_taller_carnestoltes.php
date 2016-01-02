<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_TALLERCARNESTOLTES);
	$smarty->assign("frameContenido", "serveis_taller_carnestoltes.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "3");
	$smarty->assign("subsubmenu", "4");
	$smarty->assign("seccion", "16");

	
	$smarty->display("home.tpl");
?>