<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_DIVERTALLERS);
	$smarty->assign("DESCRIPTION", DESCRIPTION_SERVEIS_DIVERTALLERS);	
	$smarty->assign("KEYWORDS", KEYWORDS_SERVEIS_DIVERTALLERS);		
	
	$smarty->assign("frameContenido", "serveis_diver_tallers.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "3");
	$smarty->assign("subsubmenu", "1");
	$smarty->assign("seccion", "13");

	
	$smarty->display("home.tpl");
?>