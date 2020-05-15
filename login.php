<?php
	session_start();
	if(isset($_SESSION['username'])){
		header("location:index.php");
    } else {
      session_destroy();
      require('model/server.php');
      include ('header.php');
 ?>
        <title>Lighthouse-Login</title>
<body>

	<div class="header">
		<h2>Indian Seafarer Login</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value=<?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn btn-success" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a><br>
		</p>
	</form>


</body>
</html>
<?php } ?>
