<?php


//	if (!isset($_SESSION['username'])) {
//		$_SESSION['msg'] = "You must log in first";
//		$_SESSION['email'] = $email;
//		header('location: login.php');
//	}

	if (isset($_GET['logout'])) {
        unset($_SESSION['username']);
	    session_destroy();
	    session_unset();
		$_SESSION['email'] = $email;
		header("location: index.php");
	}

?>