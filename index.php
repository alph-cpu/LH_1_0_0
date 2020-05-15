<?php
include('model/server.php');
if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		$_SESSION['email'] = $email;
		header('location: login.php');
	}
include ('header.php');
?>

<title>Lighthouse-Home</title>
<body>
<?php if (!isset($_SESSION['username'])) {

 } else {
    header('location: intro.php');
 }  ?>

</body>

</html>