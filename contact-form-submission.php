<?php
session_start();
error_reporting(0);

if (!isset($_POST['send']) || $_POST['send'] != 'Send') {
    header('Location: contact.php'); exit;
}





$firstname = $_POST['name'];
//$lastname = $_POST['lname'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$star = $_POST['star'];
$message = strip_tags($_POST['message']);

//print_r($_FILES);
//exit;




//exit;




///////////////////////////////////////////////////////////////////////////////////////////

	
// check that a name was entered
if (empty($firstname))
    $error = 'You must enter your Name.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
   $error = 'You must enter a valid email address.';
// check that a phone number was entered
if (empty($phone))
   // $error = 'You must enter your phone number.';
  
if (empty($message))
   $error = 'You must enter your Comments.'; 
  

 

$keys=array_keys($_POST); 
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
/* additional headers */
$headers .= "From:info@stpaulscoachingcentre.com\r\n";
$headers .= "BCc:info@assetss.in\r\n";
$headers .= "Replay-to:".$_POST['emial']."\r\n";
$headers .= "Return-Path:".$_POST['email']."\r\n";
//$subject= $_POST['subject'];
$message='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML><HEAD><META content="text/html; charset=iso-8859-1" http-equiv=Content-Type><META content="MSHTML 5.00.2920.0" name=GENERATOR><STYLE>.tb{border-color:#330000;border-style:solid;border-width:0;font-family:verdana,Arial;font-size:10pt;padding:1%;}</STYLE></HEAD><BODY bgColor=#ffffff><DIV>';
$messagex.='<TABLE align=center border=1 bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" class=tb bgcolor=white>';
for($i=0;$i<count($_POST);$i++){
$messagex.='<TR><TD valign="top">'.$keys[$i].'&nbsp;:</TD><TD>'.nl2br($_POST[$keys[$i]]).'</TD></TR>';
}

$messagex.='</TABLE>';
$message.=$messagex;
$message.='</DIV></BODY></HTML>';
//  echo $message;
//   exit;



//////////////////////////////////////////////////////////////////////////////////////////


$subject="stpaulscoachingcentre.com - Contact Form Submission";

$to='jifinjosy007@gmail.com';
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ($to,$subject, $message, $headers);
//   paulscentre@gmail.com


// send the user back to the form
header('Location:contact.php?msg=1'); exit;

?>
