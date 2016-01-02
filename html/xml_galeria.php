<?php
	header("Content-Type: text/xml; charset=ISO-8859-1");

	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");

	if (isset( $_GET["gal"] )) {
		$gal = $_GET["gal"];
		$galIndex = $_GET["galIndex"];
	}
	else {
		$gal = "generic";
		$galIndex = 0;
	}
	
	$smarty->assign("seccion", $gal);
	$smarty->assign("galeria", $GALERIA[$gal][$galIndex]);
	
	$smarty->display("xml_galeria.tpl");
?>