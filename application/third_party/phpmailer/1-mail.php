<?php
// (A) SET MAIL DATA
$to = "lverdial@ibi-worldwide.com";
$subject = "Test Email";
$message = "This is a test email message.";

// (B) SEND!
echo mail($to, $subject, $message)
  ? "OK" : "ERROR" ;