<?php
// Check for empty fields
if(empty($_POST['jobname'])      ||
   empty($_POST['jobphone'])     ||
   empty($_POST['jobemail'])     ||
   empty($_POST['site'])   ||
   !filter_var($_POST['jobemail'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['jobname']));
$email_address = strip_tags(htmlspecialchars($_POST['jobemail']));
$phone = strip_tags(htmlspecialchars($_POST['jobphone']));
$site = strip_tags(htmlspecialchars($_POST['site']));

// Create the email and send the message
$to = 'kylecrichton@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Order request:  $name";
$email_body = "You have received a new job bid request from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nSite:\n$site";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
