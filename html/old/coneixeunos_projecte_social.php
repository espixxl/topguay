<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_CONEIXEUNOS_PROJECTE);
	$smarty->assign("frameContenido", "coneixeunos_projecte_social.tpl");
	$smarty->assign("menu", "2");
	$smarty->assign("seccion", "2");
	$smarty->display("home.tpl");
?>