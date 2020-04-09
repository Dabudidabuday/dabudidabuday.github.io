




<?php

function mail_utf8($to, $from, $subject, $message)
{
    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
 
    $headers  = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "From: $from\r\n";
 
    return mail($to, $subject, $message, $headers);
}

$msg = '';

if (isset($_POST['title'])) {
	$msg .= 'Form: ';
	$msg .= $_POST['title'];
	$msg .= "\r\n";
}

if (isset($_POST['name'])) {
	$msg .= 'Name: ';
	$msg .= $_POST['name'];
	$msg .= "\r\n";
}

if (isset($_POST['phone'])) {
	$msg .= 'Phone: ';
	$msg .= $_POST['phone'];
	$msg .= "\r\n";
}

if (isset($_POST['email'])) {
	$msg .= 'Email: ';
	$msg .= $_POST['email'];
	$msg .= "\r\n";
}

if (isset($_POST['company'])) {
	$msg .= 'Company: ';
	$msg .= $_POST['company'];
	$msg .= "\r\n";
}



$msg .= 'Date: ';
$msg .= date('F j, Y, G:i:s');


$mailTo = 'rro@fnt.com.ua';
$mailFrom = 'rro@fnt.com.ua';

mail_utf8($mailTo, $mailFrom, $_POST['title'], $msg);

echo $msg;

?>

