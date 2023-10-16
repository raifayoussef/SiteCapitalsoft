<?php
ob_start();
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'vendor/autoload.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
// $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true; // Authentication enabled
$mail->SMTPSecure = 'tls'; // Secure transfer enabled (REQUIRED for Gmail)
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "raifadev@gmail.com";
$mail->Password = "yppfravndrzsjoyc";
$mail->SetFrom("raifadev@gmail.com");
$mail->CharSet = "UTF-8"; // Set character encoding to UTF-8

 ?>