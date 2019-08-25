<?php 
    require_once "Mail.php";
   $to = "gokulamudan@gmail.com";
   $from = "info@eclecticdesigndecor.com";
$subject = "What's up";
$body = "Hi,nnHow are you? What is happening";
 
 #$host = "smtp.gmail.com'";
 #$username = "username@youraccount.com";
 #$password = '************';
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
$smtp = Mail::factory('smtp', array(
       'host' => 'sg2plcpnl0143.prod.sin2.secureserver.net',
       'port' => '25',
       'auth' => true,
       'username' => 'admin@eclecticdesigndecor.com',
       'password' => '2gdeveloper'
   ));
 
 $mail = $smtp->send($to, $headers, $body);
 echo $mail;
 if (PEAR::isError($mail)) {
   echo("
" . $mail->getMessage() . "

");
  } else {
   echo("
Message successfully sent!

");
  }
?>