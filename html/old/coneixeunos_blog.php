<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_CONEIXEUNOS_BLOG);
	$smarty->assign("frameContenido", "coneixeunos_blog.tpl");
	$smarty->assign("menu", "4");
	$smarty->assign("seccion", "2");
	$smarty->display("home.tpl");
?>