<?php include('model/server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Indian Seafarer Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <a class="navbar-brand" href="/"> <img src="style/logo.png" width="120" height="55" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Forum </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
</head>
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