<?php include_once 'config.php'; ?>

<?php

$conn = $mysqli;

$req = $_POST['req'];
$email = $_POST['email'];

//Approve user
if($req == 'update'){
$sql = "UPDATE users SET isapproved = 1 WHERE email='{$_POST[email]}'";

if ($conn->query($sql)) {
    echo "User request has been approved";
} else {
    echo "Error deleting record: " . $conn->error;
}
}

//Delete pending request of user
if($req == 'deletereq'){
    $sql = "DELETE FROM users WHERE email='{$_POST[email]}'";

    $email_from = 'SGTestingInstitute.com';
    $email_subject = "Registration Request Not Approved";

    $message = '<html><body>';
    $message .= '<div><span>Your user registration request in SG Testing Institute has been deleted by admin.</span></div>';
    $message .= '<div><p>Please register again by providing valid information.</p></div>';
    $message .= '<div style="margin-top:70px;"><span><strong>Note: </strong>If your registration details contain any dummy details the request will be deleted.</span></div>';
    $message .= "</body></html>";

    $to = $email;
    $headers = "From: $email_from \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($to,$email_subject,$message,$headers);

if ($conn->query($sql)) {
    echo "User request has been rejected";
} else {
    echo "Error deleting record: " . $conn->error;
}
}


$conn->close();
?>