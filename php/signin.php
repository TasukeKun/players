<?php 
	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
	 if(mysqli_num_rows($check_user) > 0) {

	 } else {
		$_SESSION['message'] = "invalid login or password";	
		header('Location: login.php');
	 }
?>