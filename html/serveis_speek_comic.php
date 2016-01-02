<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_SPEEK);
	$smarty->assign("frameContenido", "serveis_speek_comic.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "2");
	$smarty->assign("subsubmenu", "4");
	$smarty->assign("seccion", "12");

	
	$smarty->display("home.tpl");
?>