<?php
// (A) INSTALL PHP MAILER FIRST!
// https://github.com/PHPMailer/PHPMailer
// https://getcomposer.org/
// composer require phpmailer/phpmailer

// (B) LOAD PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";

// (C) SET MAIL
$mail = new PHPMailer;
$mail->setFrom("your@email.com");
$mail->addAddress("jon@doe.com");
$mail->addCC("joe@doe.com");
$mail->addBCC("joy@doe.com");
$mail->Subject = "Test Email";
$mail->Body = "This is a test email message.";

// (D) SEND!
echo $mail->send()
  ? "Mail sent"
  : "Error sending mail" . $mail->ErrorInfo ;