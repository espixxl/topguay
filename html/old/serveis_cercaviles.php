<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_CERCAVILES);
	$smarty->assign("DESCRIPTION", DESCRIPTION_SERVEIS_CERCAVILES);	
	$smarty->assign("KEYWORDS", KEYWORDS_SERVEIS_CERCAVILES);		
	$smarty->assign("frameContenido", "serveis_cercaviles.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "2");
	$smarty->assign("subsubmenu", "1");
	$smarty->assign("seccion", "10");

	
	$smarty->display("home.tpl");
?>