<?php
/* (A) SET MAIL DATA
$to = "jon@doe.com";
$subject = "Test Email";
$message = "This is a test email message.";

// (B) NOT-SO-FRIENDLY WHEN SETTING FROM, CC, BCC, HTML MAIL, ETC...
$header = implode("\r\n", [
  "MIME-Version: 1.0",
  "Content-type: text/plain; charset=utf-8",
  "From: YOUR NAME <your@email.com>",
  "Cc: joe@doe.com",
  "Bcc: joy@doe.com"
]);

// (C) SEND!
echo mail($to, $subject, $message, $header)
  ? "OK" : "ERROR" ;
  
  */
  
  
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username = 'lverdial@ibi-worldwide.com';
$mail->Password = 'Turiscai1';
$mail->SetFrom('lverdial@ibi-worldwide.com', 'FromEmail');
$mail->addAddress('lverdial@ibi-worldwide.com', 'ToEmail');
//$mail->SMTPDebug  = 3;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}