<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@musicschool.com.au';

$email_subject = 'new form submission';
$email_body = "user name: $name.\n".
              "user email: $visitor_email.\n". 
              "user subject: $subject.\n".
              "user message: $message.\n";

$to = 'faizanafzal405@gmail.com';
$header = "From: $email_from\r\n";
$header .= "Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body,$headers);
header("Location: contact.html");
?>