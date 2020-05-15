<?php
include('model/server.php');

//	if (!isset($_SESSION['username'])) {
//		$_SESSION['msg'] = "You must log in first";
//		$_SESSION['email'] = $email;
//		header('location: login.php');
//	}

unset($_SESSION['username']);
unset($_SESSION['counter']);
session_unset();
session_destroy();

header("location: index.php");


?>