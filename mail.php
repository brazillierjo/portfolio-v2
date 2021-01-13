<?php

$name    = $this->escape($_POST["name"]);
$email   = $_POST["email"];
$message = $this->escape($_POST["message"]);

$to      = "j.brazillier@gmail.com";
$from    = "contact@synergy-development.fr";
$subject = "New message from www.synergy-development.fr";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.$from.' <'.$from.'>' . "\r\n";
$headers .= "Reply-To: $to" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

$msg = "<h2>New contact message</h2><hr>
        <div><b>Nom:</b> $name</div>
        <div><b>Email:</b> $email</div>
        <br/>
        <div><b><u>Message:</u></b> <br/> $message</div>";



    mail($to,$subject,$msg,$headers);

?>


<?php/*

	$emailTo = "j.brazillier@gmail.com";

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ".$_REQUEST['email']."\r\n";

	if (!isset($_REQUEST['subject'])) {
		$subject = "Contact form message";
	} else {
		$subject = $_REQUEST['subject'];
	}

	$body = "";
	$body .= "<p><b>Nom: </b>".$_REQUEST['name']."</p>";
	$body .= "<p><b>Email: </b>".$_REQUEST['email']."</p>";
	$body .= "<p><b>Sujet: </b>".$subject."</p>";
	$body .= "<p><b>Message: </b>".$_REQUEST['message']."</p>";

	if( !mail($emailTo, $subject, $body, $headers) ){
		$mail_sent = false;
	}
	if(!isset($resp)){
		echo json_encode($mail_sent);
	} */
?>
