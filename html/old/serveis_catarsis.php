<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_SERVEIS_CATARSIS);
	$smarty->assign("DESCRIPTION", DESCRIPTION_SERVEIS_CATARSIS);
	$smarty->assign("KEYWORDS", KEYWORDS_SERVEIS_CATARSIS);		
	$smarty->assign("frameContenido", "serveis_catarsis.tpl");
	$smarty->assign("menu", "0");
	$smarty->assign("submenu", "1");
	$smarty->assign("subsubmenu", "2");
	$smarty->assign("seccion", "5");

	
	$smarty->display("home.tpl");
?>