<?php
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];

	$subject = "=?utf-8?B?".base64_encode("Сообщение от чёрта")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";


	$success = mail("lagunovd@list.ru", $subject, $message, $headers);
	echo $success;
?>