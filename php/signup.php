<?php 
	session_start();
	require_once 'connect.php';
	header('Location: register.php');

	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	if($login == "" or $email == ""  or $password == "") {
		
		$_SESSION['message'] = 'Password mismatch';	
			
	}
	else if($password === $password_confirm) {

		mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
		$_SESSION['message'] = "Registration completed successfully";	
		header('Location: login.php');
		exit;
	} 
	else {
		$_SESSION['message'] = 'Password mismatch';	
	}

?>