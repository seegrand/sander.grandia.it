<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	    ||
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'sander@grandia.it';
$email_subject = "Contact Form [sander.grandia.it]:  $name";

if ($phone != null) {
    $email_body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
} else {
    $email_body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
}

//$headers = "From: noreply@grandia.it\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";
$headers = 'From: noreply@grandia.it' . "\r\n" . 'Reply-To: ' . $email_address . "\r\n";
mail($to,$email_subject,$email_body,$headers,"-f noreply@grandia.it");
return true;			
?>