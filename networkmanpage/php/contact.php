<?php
$to = 'inform@your.com'; //your e-mail
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = 'Subject';
$messages = 'From site your.com: '.$name.'</br>'.$email.'</br>'.$message.'</br>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: info@your.com' . "\r\n";

mail($to, $subject, $messages, $headers);
?>