<?php
session_start();
error_reporting(0);

 $secret=$_POST["secret"];
 $response=$_POST["response"];
    $firstname = $_POST['name'];
//$lastname = $_POST['lname'];
$email_address = $_POST['email'];
//$phone = $_POST['phone'];
$star = $_POST['star'];
$message =$_POST['message'];

$t=time();
$d=date("y/m/d",$t);

/*$inst=new mysql();
$con=$inst->connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
$inst->setDb($con,MYSQL_DB);
$Qry = "INSERT INTO `comments` ( `name`,`email`,`description`,`star`,`date`) VALUES ( '$firstname','$email_address','$message','$star','$d')";  
	//echo $Qry;
$inst->query($con,$Qry);
*/



if($secret !== "6LcrXeIiAAAAABwXM8PPZ3WwNCAbhc8-11Cv_8rr"){

    echo "Invalid Captcha";
    
}else{


// $inst=new mysql();
// $con=$inst->connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS);
// $inst->setDb($con,MYSQL_DB);
// $Qry = "INSERT INTO `comments` ( `name`,`email`,`description`,`star`,`date`) VALUES ( '$firstname','$email_address','$message','$star','$d')";  
// 	//echo $Qry;
// $inst->query($con,$Qry);

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: info@dev.stpaulscoachingcentre.com" . "\r\n";
/* additional headers */

//$subject= $_POST['subject'];
$message='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML><HEAD><META content="text/html; charset=iso-8859-1" http-equiv=Content-Type><META content="MSHTML 5.00.2920.0" name=GENERATOR><STYLE>.tb{border-color:#330000;border-style:solid;border-width:0;font-family:verdana,Arial;font-size:10pt;padding:1%;}</STYLE></HEAD><BODY bgColor=#ffffff><DIV>';
$messagex.='<TABLE align=center border=1 bordercolorlight="#C0C0C0" bordercolordark="#FFFFFF" class=tb bgcolor=white>';
for($i=0;$i<count($_POST);$i++){
    if($keys[$i]=='secret' || $keys[$i]=='response') {
        
    } else {
        $messagex.='<TR><TD valign="top">'.$keys[$i].'&nbsp;:</TD><TD>'.nl2br($_POST[$keys[$i]]).'</TD></TR>';
    }
}

$messagex.='</TABLE>';
$message.=$messagex;
$message.='</DIV></BODY></HTML>';

$subject = "stpaulscoachingcentre.com - Comment Form Submission";
$to = 'jifinjosy007@gmail.com';

// Send the email
if(mail($to, $subject, $message, $headers)) {
    echo "Feedback posted";
} else {
    echo "Something odd happened";
}
}