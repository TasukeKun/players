<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Authorization</title>
</head>
<body>
	<div id="preloader" class="preloader">
		<div class="loader"></div>
	</div>
	<div class="wrapper">
		<div class="auth">
			<div class="auth__block">
				<form class="auth-form" action="signin.php" method="post">
					<p>Sign in</p>
					<input class="auth-login" type="text" name="login" placeholder="login">

					<input class="auth-pass" type="password" name="pass" placeholder="password">

					<button class="auth-btn" type="submit">Sign in</button>
				</form>
				<a href="register.php" class="signup">Sign up</a>
				<?php
            		if ($_SESSION['message']) {
                	echo '<div class="message"> ' . $_SESSION['message'] . ' </div>';
            	}
            	unset($_SESSION['message']);
        		?>
			</div>
		</div>
		<a class="btn-back" href="index.html">← back</a>
	</div>
	<script src="js/preloader.js"></script>
</body>
</html>