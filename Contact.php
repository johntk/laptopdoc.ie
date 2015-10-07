<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$to = "info@laptopdoc.ie" ;
$from = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$subject1 = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$headers = "From: $from";
$subject = "Contact Us";


$fields = array();
$fields{"name"} = "Name ";
$fields{"email"} = "Email ";
$fields{"subject"} = "Message subject ";
$fields{"message"} = "Message ";

$body = "You have received the following information:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: www.laptopdoc.ie";
$subject2 = "Thank you for contacting us";
$autoreply = "Thank you for contacting us. One of our Technicians will get back to you as soon as possible, usualy within 48 hours. If you have any more questions, please contact us by phone on: 0852441635 or (01)4927529";

if($name == '') {print "You have not entered an name, please go back and try again";}
else {		
if($from == '') {print "You have not entered a email, please go back and try again";}
else {
if($subject1==''){print "You have not entered a subject, please go back and try again";}
else{
if($message==''){print "You have not entered a message, please go back and try again";}
else{
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.laptopdoc.ie/Contact Us.html" );}
else
{print "We encountered an error sending your mail"; }
}
}
}
}
?> 
</body>
</html>