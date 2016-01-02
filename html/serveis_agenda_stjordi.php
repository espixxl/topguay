<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_AGENDASTJORDI);
	$smarty->assign("frameContenido", "serveis_agenda_stjordi.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "1");
	$smarty->assign("subsubmenu", "5");
	$smarty->assign("seccion", "8");

	
	$smarty->display("home.tpl");
?>