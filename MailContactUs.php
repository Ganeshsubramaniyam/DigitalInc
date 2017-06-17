<?php
session_start();

if ($_SESSION['captcha']= $_POST['captcha']) 
{
echo "Invalid Captcha Code...";		
}
else
{
	$to ="marudhupandiyang@gmail.com,mrsjgk.guru@gmail.com";
$subject="CozMoz.in FeedBack logged";
$body = "

CozMoz.in FeedBack Logged



Name:
".$_POST['name'].
"
E-Mail:
".$_POST['email'].
"
FeedBack:
".
$_POST['message'] .

"

Automated Mailer

Regards
CozMoz HelpDesk

";
  require_once "Mail.php";  // DO NOT CHANGE THIS LINE
  $from = 'admin@payguest.in';
  $host = 'mail.payguest.in';
  $username = 'admin@payguest.in';  //IMPORtANT: This email MUST be same as your FROM address.
  $password = '@dmin0123';


$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'username' => $username,
'password' => $password));
$mail = $smtp->send($to, $headers, $body);
echo $mail;
}

?>