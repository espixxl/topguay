<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_LAPECA);
	$smarty->assign("DESCRIPTION", DESCRIPTION_SERVEIS_LAPECA);
	$smarty->assign("KEYWORDS", KEYWORDS_SERVEIS_LAPECA);		
	$smarty->assign("frameContenido", "serveis_la_peca.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "1");
	$smarty->assign("subsubmenu", "1");
	$smarty->assign("seccion", "4");

	
	$smarty->display("home.tpl");
?>