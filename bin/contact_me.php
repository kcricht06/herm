<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
 if(!$captcha){
    echo '<h2>Please check the the captcha form.</h2>';
      exit;
    }
    $secretKey = "6LfdTREUAAAAAERcFEYQ48rEV4wqBfvX8z4rcUYg";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response,true);
    if(intval($responseKeys["success"]) !== 1) {
      echo '<h2>You are spammer ! Get the @$%K out</h2>';

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$lot = strip_tags(htmlspecialchars($_POST['lot']));
$block = strip_tags(htmlspecialchars($_POST['block']));
$sect = strip_tags(htmlspecialchars($_POST['sect']));
$tax = strip_tags(htmlspecialchars($_POST['tax']));
$jobmessage = strip_tags(htmlspecialchars($_POST['jobmessage']));

// Create the email and send the message
$to = 'kylecrichton@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nSite: $message\n\nCity: $city\n\nLot: $lot\n\nBlock: $block\n\nSection: $sect\n\nTax Parcel ID #: $tax\n\nSpecial Instructions: $jobmessage";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
