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
	$msg .= '<b>';
	$msg .= $_POST['title'];
	$msg .= '</b>';
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
	$msg .= 'Email: ';
	$msg .= $_POST['email'];
	$msg .= "\r\n";
}



$msg .= 'Date: ';
$msg .= date('F j, Y, G:i:s');


$mailTo = '94mir.ms@gmail.com';
$mailFrom = 'noreply@test.com';

mail_utf8($mailTo, $mailFrom, $_POST['formtitle'], $msg);

echo $msg;

?>