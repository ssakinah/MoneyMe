<?php

	session_start();

	$username = "";
	$email = "";
	$errors = array();

	$db = mysqli_connect('localhost', 'root', '', 'registration');
	
	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	
			if (empty($username)){
				array_push($errors, "Username is required");
			}
			
			if (empty($email)){
				array_push($errors, "Email is required");
			}
			
			if (empty($password_1)){
				array_push($errors, "Password is required");
			}
			
			if ($password_1 != $password_2) {
				array_push($errors, "The passwords do not match");
			}
			
			if (count($errors) == 0) {
				$password = md5($password_1);
				$sql = "INSERT INTO users (username, email, password) 
						VALUES ('$username', '$email', '$password')";
				mysqli_query($db,$sql);
				$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: main.php'); 
			}
	}
	
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
	
			if (empty($username)){
				array_push($errors, "Username is required");
			}
			
			if (empty($password)){
				array_push($errors, "Password is required");
			}
			
			if (count($errors) == 0) {
				$password = md5($password);
				$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($db, $query);
				
				if (mysqli_num_rows(mysqli_query($db, $query)) == 1){
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: main.php'); 
				}
				else {
				array_push($errors,"Wrong username/password combination");
				// header('location: login.php');
				}
			}
			
	}
	
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_sSESSION['username']);
		header('location: login.php');
	}
	
?>