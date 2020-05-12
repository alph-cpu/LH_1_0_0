<?php
session_start();
	// variable declaration
	$firstname = "";
	$lastname = "";
	$indosno = "";
	$dob = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";
	$_SESSION['olduser'] = false;

	// connect to database
    require('db_conn.php');


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$firstname =htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$indosno = htmlspecialchars($_POST['indosno']);
		$dob = htmlspecialchars($_POST['dob']);
		$email = htmlspecialchars($_POST['email']);
		$password_1 = htmlspecialchars($_POST['password_1']);
		$password_2 = htmlspecialchars($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "Firstname is required"); }
		if (empty($lastname)) { array_push($errors, "Lastname is required"); }
		if (empty($indosno)) { array_push($errors, "INDoSNo is required"); }
		if (empty($dob)) { array_push($errors, "DoB is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// check user exists in the DB
		$stmt =$db->prepare("SELECT * FROM user WHERE email=?");
		$stmt->bimd_param("s", $email);
      	        $stmt->execute;
      	        $results = $stmt->get_result();
		if ($results->num_rows == 0) {
				// register user if there are no errors in the form
				$stmt->close();
          		if (count($errors) == 0) {
					$password = crypt($password_1, "d4");
					$stmt1 = $db->prepare("INSERT INTO user (firstname, lastname, indosno, dob, email, password)
							VALUES(?, ?, ?, ?, ?, ?)";
                                         			$stmt1->bind_param("ssssss", $firstname, $lastname, $indosno, $dob, $email, $password);
                                					if ($stmt1->execute()){
                                                      	$stmt->close();
                                                      $db->close();
                                                    } else {
                                                      	die("An unexpected error occured, try again later.");
						$username = $firstname ." ". $lastname;
						$_SESSION['username'] = $username;
						$_SESSION['success'] = "You are now logged in";
						header('location: home.php');
                                                    }
				}
		} else {
			while ($row = $results->fetch_assoc()) {
				$firstname = $row["firstname"];
				$lastname = $row["lastname"];
			}
			$username = $firstname ." ". $lastname;
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['olduser'] = true;
			$_SESSION['success'] = "Welcome back mate $username Just enter your password";
			header('location: index.php');
		}
	}
	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = crypt($password, "d4");
			$stmt = $db->prepare("SELECT * FROM user WHERE email=? AND password=?");
          	$stmt->bimd_param("ss", $email, $password);
          	$stmt->execute();
			$results = $stmt->get_result();
			 while ($row = $results->fetch_assoc()) {
				$firstname = $row["firstname"];
				$lastname = $row["lastname"];
				$indosno = $row["indosno"];
				$dob = $row["dob"];
			 }
			$username = $firstname ." ". $lastname;

			if ($results->num_rows($results) == 1) {
				$stmt->close();
              	$stmt->close();
              	$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				$stmt->close();
              	$db->close();
              array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>
