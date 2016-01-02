<?php
	define ("MAIL_HOST", "smtp.topguay.com");
	define ("MAIL_FROM", "web@topguay.com");
	define ("MAIL_FROMNAME", "TopGuay");
	define ("MAIL_SUBJECT", "TopGuay");
	define ("MAIL_SUBJECT_CONTACTO", "TOPGUAY - Contacteu-nos");
	
	define ("MAIL_USERNAME", "tcm643c");
	define ("MAIL_PASSWORD", "Topeguay08");
	
	require_once("inc/Mailer/class.phpmailer.php");

	function sendMail($subject=MAIL_SUBJECT, $body="", $to="topguay@topguay.com") {
		$mail             = new PHPMailer();

		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = MAIL_HOST; // SMTP server
		$mail->From       = MAIL_FROM;
		$mail->FromName   = MAIL_FROMNAME;
		$mail->Subject    = $subject;
		
		$mail->SMTPAuth = true;
		$mail->Username   = MAIL_USERNAME;
		$mail->Password    = MAIL_PASSWORD;
		
		$mail->AltBody    = "Para ver el mensaje, use un visor de e-mail compatible con HTML."; // optional, comment out and test
		$mail->MsgHTML($body);
		$mail->AddAddress($to);
		
		if(!$mail->Send()) {
			// echo "Mailer Error: " . $mail->ErrorInfo;
			return $mail->ErrorInfo;
		} 
		else {
			// echo "Message sent!";7
			return true;
		}
	}
?>

