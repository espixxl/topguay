<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_CONEIXEUNOS_TOPGUAY);
	$smarty->assign("DESCRIPTION", DESCRIPTION_CONEIXEUNOS_TOPGUAY);	
	$smarty->assign("KEYWORDS", KEYWORDS_CONEIXEUNOS_TOPGUAY);		
	$smarty->assign("frameContenido", "coneixeunos_topguay.tpl");
	$smarty->assign("menu", "1");
	$smarty->assign("seccion", "1");
	$smarty->display("home.tpl");
?>