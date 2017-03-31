<?php
// Check for empty fields
if(empty($_POST['jobname'])      ||
   empty($_POST['jobphone'])     ||
   empty($_POST['billadd'])      ||
   empty($_POST['jobemail'])     ||
   empty($_POST['site'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$bill = strip_tags(htmlspecialchars($_POST['bill']))
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$site = strip_tags(htmlspecialchars($_POST['site']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$county = strip_tags(htmlspecialchars($_POST['county']));
$lot = strip_tags(htmlspecialchars($_POST['lot']));
$block = strip_tags(htmlspecialchars($_POST['block']));
$sect = strip_tags(htmlspecialchars($_POST['sect']));
$tax = strip_tags(htmlspecialchars($_POST['tax']));
$jobmessage = strip_tags(htmlspecialchars($_POST['jobmessage']));



// Create the email and send the message
$to = 'kylecrichton@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Order request:  $name";
$email_body = "You have received a new job bid request from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nBilling Address: $bill\n\nEmail: $email_address\n\nPhone: $phone\n\nSite: $site";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
