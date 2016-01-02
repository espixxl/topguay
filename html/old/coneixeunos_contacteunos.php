<?php
	require_once("inc/preferences.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	// ENVIO DE EMAIL
	require_once("inc/mail.php");
	require_once("inc/Smarty/Smarty.inc.php");
	
	if (isset($_POST["nombre"])) {
		if (!isset($_POST["informacion"]) || empty($_POST["informacion"]) ) { 
			$_POST["informacion"] = "no"; 
		}
		$smarty->assign("FORM", $_POST);
		
		$body = $smarty->fetch("contacteunos_email.tpl");
		$smarty->assign("INFORMACIONOK", "1");
		// $r = sendMail(MAIL_SUBJECT_CONTACTO, $body, "info@topguay.com");
		$r = sendMail(MAIL_SUBJECT_CONTACTO, $body, "topguay@topguay.com");
	}
	// FIN ENVIO EMAIL
	
	
	// print_r($_SERVER);
	
	$smarty->assign("WEB_TITLE", TITLE_CONEIXEUNOS_CONTACTA);
	$smarty->assign("frameContenido", "coneixeunos_contacteunos.tpl");
	$smarty->assign("menu", "3");
	$smarty->assign("seccion", "3");
	$smarty->display("home.tpl");
?>