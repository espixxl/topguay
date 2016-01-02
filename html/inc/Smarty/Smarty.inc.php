<?php
	$root = dirname(__FILE__);
	
	// echo($root);
	define("DOC_ROOT", $root);

	require_once(DOC_ROOT."/libs/Smarty.class.php");
	// require_once(DOC_ROOT."/libs/SmartyPaginate.class.php");

	$smarty = new Smarty();
	$smarty->compile_id = $idioma;
	
	$smarty->compile_check = true;
	$smarty->debugging = false;	
	
	$smarty->template_dir = DOC_ROOT . "/html/" . $idioma;
	$smarty->compile_dir = DOC_ROOT . "/compiled/". $idioma;
	$smarty->cache_dir = DOC_ROOT . "/cache/" . $idioma;
	$smarty->caching = false;
	
	
	$smarty->assign("seccionFlash", $SECCIONFLASH);
?>