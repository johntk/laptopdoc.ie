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
$make = $_REQUEST['make'] ;
$model = $_REQUEST['model'] ;
$issue = $_REQUEST['issue'] ;
$headers = "From: $from";
$subject = "Free Quote";


$fields = array();
$fields{"name"} = "Name ";
$fields{"email"} = "Email ";
$fields{"make"} = "PC Make ";
$fields{"model"} = "PC Model ";
$fields{"issue"} = "Issue/Issues ";

$body = "You have received the following information:\n\n"; foreach($fields as $a => $b){ $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

$headers2 = "From: www.laptopdoc.ie";
$subject2 = "Thank you for contacting us";
$autoreply = "Thank you for contacting us. One of our Technicians will get back to you as soon as possible, usualy within 24 hours. If you have any more questions, please contact us by phone on: 0852441635 or (01)4927529";

if($name == '') {print "You have not entered a name, please go back and try again";}
else {
if($from == '') {print "You have not entered an email, please go back and try again";}
else {
if($make == '') {print "You have not entered a make, please go back and try again";}
else {
if($model == '') {print "You have not entered a model, please go back and try again";}
else {
if($issue == '') {print "You have not entered you issue/issues, please go back and try again";}
else {
	
$send = mail($to, $subject, $body, $headers);
$send2 = mail($from, $subject2, $autoreply, $headers2);
if($send)
{header( "Location: http://www.laptopdoc.ie/Free Quote.html" );}
else
{print "We encountered an error sending your mail"; }
}
}
}
}
}
?> 
</body>
</html> 
</body>
</html>