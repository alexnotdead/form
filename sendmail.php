<?php


$_POST = json_decode(file_get_contents('php://input'), true);

$limit = $_POST['limit'];
$email = $_POST['email'];
$summ  = $_POST['summ']
$message = "<p>Сумма в рублях: $limit</p>";
$message .= "<p>Сумма в валюте: $summ</p>";
$message .= "<p>Email: $email</p>";

$to_email = "$email";
$subject = 'Mail subject';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: Form test <admin@samyon-alexeev.com>';

mail($to_email, $subject, $message, implode("\r\n", $headers));


?>