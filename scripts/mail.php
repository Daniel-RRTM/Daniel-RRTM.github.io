<?php 
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: Website visitor \n Message: $message";
$recipient = "mizzit.games.studio@protonmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$test = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
echo ($test)
?>