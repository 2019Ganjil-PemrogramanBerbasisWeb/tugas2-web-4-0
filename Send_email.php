<?php
$name=$_POST['namadepan'].' '.$_POST['lastname'];
$email=$_POST['email'];
$subject=$_POST['tujuan'];
$message=$_POST['pesan'];

$to='pedos@localhost';

// $message="Dear, <br /> <br />".$message;

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// // More headers
// $headers .= 'From:'.$name.' <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
// $headers .= 'Cc: kartikarindi11@gmail.com' . "\r\n";
$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);

// $to      = 'ea-contact@localhost';
// $from    = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['msg'];
// $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
// mail($to, $subject, $message, $headers); //Nunggu mail server online
// $response = 'Message sent!';