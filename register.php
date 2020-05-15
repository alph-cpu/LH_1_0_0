<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
} else {
    session_destroy();
require('model/server.php');
include ('header.php');
?>

    <title>Indian Seafarer Signup</title>

<body>
	<div class="header">
		<h2>Indian Seafarer SignUp</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
		  <label>Firstname</label>
		  <input type="text" name="firstname" value="">
		</div>
		<div class="input-group">
		  <label>Lastname</label>
		  <input type="text" name="lastname" value="">
		</div>
		<div class="input-group">
		  <label>INDoSNo</label>
		  <input type="text" name="indosno" value="">
		</div>
		<div class="input-group">
		  <label>Birthday</label>
		  <input type="date" name="dob" value="">
		</div>
		<div class="input-group">
		  <label>Email</label>
		  <input type="email" name="email" value="">
		</div>
		<div class="input-group">
		  <label>Password</label>
		  <input type="password" name="password_1">
		</div>
		<div class="input-group">
		  <label>Confirm password</label>
		  <input type="password" name="password_2">
		</div>
		<div class="input-group">
		  <button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="/">Sign in</a>
		</p>
	</form>
</body>
</html>

<?php } ?>
