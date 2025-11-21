 <?php
$to = "kaiservignesh@gmail.com";
$subject = " My webpage email from ".$_POST['name']." ".$_POST['phone'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$phone_field = $_POST['phone'];
$message = $_POST['message'];

$headers = 'From: '.$_POST['email'].'' . "\r\n" .
   'Reply-To: '.$_POST['email'].'' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
 
$body = $message;

mail($to, $subject, $body, $headers );
header( 'Location: thankyou.html' ) ; //replace with landing page.
?> 
