<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE);
	$smarty->assign("DESCRIPTION", DESCRIPTION);	
	$smarty->assign("KEYWORDS", KEYWORDS);		
	$smarty->assign("frameContenido", "homeTopGuay.tpl");
	$smarty->assign("HOME", "1");
	$smarty->assign("seccion", "1");
	
	$smarty->display("home.tpl");
?>