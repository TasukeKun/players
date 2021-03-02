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
	<title>Sign up</title>
</head>
<body>
	<div id="preloader" class="preloader">
		<div class="loader"></div>
	</div>
	<div class="wrapper">
		<div class="auth">
			<div class="auth__block">
				<form class="auth-form" action="signup.php" method="post">
					<p>Sign Up</p>
					<input class="auth-login" type="text" name="login" placeholder="login">

					<input class="auth-email" type="email" name="email" placeholder="email">

					<input class="auth-pass" type="password" name="password" placeholder="password">
					<input class="auth-pass auth-pass2" type="password" name="password_confirm" placeholder="password confirm">

					<button class="auth-btn" type="submit">Sign up</button>
						<?php
							if($_SESSION['message']) {
								echo 
								'<div class="message"> ' . $_SESSION['message'] .  ' </div>';
							}
							unset($_SESSION['message']);
						?>
				</form>
			</div>
		</div>
		<a class="btn-back" href="../index.html" name="do_signup">← back</a>
	</div>
	<script src="js/preloader.js"></script>
</body>
</html>