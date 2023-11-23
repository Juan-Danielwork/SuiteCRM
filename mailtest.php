<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

include "vendor/phpmailer/phpmailer/src/PHPMailer.php";
use PHPMailer\PHPMailer\PHPMailer;
$message = "Hello world";
$mail = new PHPMailer();
$mail->SMTPDebug =1;
$mail->CharSet = "UTF-8";
$mail->AddAddress("zetta.tecnologias@gmail.com", "Avinco");
$mail->SetFrom("raulvallarino@avincopanama.com","Avinco");
$mail->Subject = "Test Message";
$mail->Body = $message;
$mail->Send();
