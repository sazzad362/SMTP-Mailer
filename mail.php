<?php

	/**
	 * Include PHP mailer Class 
	 */
	include "classes/class.phpmailer.php";
	
	/**
	 * Receiver Infromation
	 */
	$email = "";
	$name  = "";
	
	/**
	 * SMTP Information
	 */
	$sender_name = "";
	$username    = "";
	$password    = "";
	$smtp_host   = "";
	
	/**
	 * Mail Content
	 */
	$mail_subject = "Test Email SMTP";
	$message      = "Hello world!!1";
	
	$mail             = new PHPMailer;
	$mail->IsSMTP();
	$mail->Host       = $smtp_host;
	$mail->Port       = 465;
	$mail->SMTPAuth   = true;
	$mail->SMTPDebug  = 2;
	$mail->SMTPSecure = "ssl";
	$mail->Username   = $username;
	$mail->Password   = $password;
	$mail->AddReplyTo($username, $sender_name);
	$mail->SetFrom($username);
	$mail->Subject    = $mail_subject;
	$mail->AddAddress($email, $name);
	$mail->MsgHTML($message);
	$send             = $mail->Send();
	
	if($send) {
		$replay = 'Mail Sent';
	} else {
		$replay = $mail->ErrorInfo;
	}

	print_r($replay);
	
?>