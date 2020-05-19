<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    $_SESSION['email'] = $email;
//    header('location: login.php');
}
?>
