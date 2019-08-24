<?php 
    require_once "Mail.php";

echo "test";
echo "<script>console.log('Success in Php' );</script>";
  $email =   'eclecticdesigndecor@gmail.com'; //the address to which the email will be sent
     $name     =   $_POST['cpname'];  
     $email_user    =   $_POST['cpemail'];
     #$feedback  =   $_POST['subject'];
     $phone  =   $_POST['cpphone'];
	$intrest = $_POST['cpmailmessage'];
	  $headers  = "From: $email\r\n";
     $headers .= "Reply-To: $email\r\n";
     $content = "text/html; charset=utf-8";
            $mime = "1.0";
			 $email_to="eclecticdesigndecor@gmail.com";
  $smtp = Mail::factory('smtp', array(
       'host' => 'smtp.gmail.com',
       'port' => '587',
       'auth' => true,
       'username' => 'eclecticdesigndecor@gmail.com',
       'password' => 'design&decor'
   ));
   $body="Name:$name Email:$email_user Num:$phone Message:$intrest";
$headers = array(
   'From' => "eclecticdesigndecor@gmail.com",
   'To' => "$email_to",
   'Subject' => "New Enquiry from $name",
                            'MIME-Version' => $mime,
                            'Content-type' => $content
);
$mail = $smtp->send($email_to, $headers, $body);

if (PEAR::isError($mail)) {
   echo('<p>' . $mail->getMessage() . '</p>');
} else {
   echo('<p>Message successfully sent!</p>');
}

    

?>