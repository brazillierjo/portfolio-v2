<?php

	$emailTo = "j.brazillier@gmail.com";

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ".$_REQUEST['email']."\r\n";

	if (!isset($_REQUEST['subject'])) {
		$subject = "Contact form message";
	} else {
		$subject = $_REQUEST['subject'];
	}

	reset($_REQUEST);

	$body = "";
	$body .= "<p><b>Nom: </b>".$_REQUEST['name']."</p>";
	$body .= "<p><b>Email: </b>".$_REQUEST['email']."</p>";
	$body .= "<p><b>Sujet: </b>".$subject."</p>";
	$body .= "<p><b>Message: </b>".$_REQUEST['message']."</p>";

	if( mail($emailTo, $subject, $body, $headers) ){
		$mail_sent = true;
	} else {
		$mail_sent = false;
	}
	if(!isset($resp)){
		echo json_encode($mail_sent);
	}
?>
