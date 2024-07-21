<?php

	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/7c094c270d.js" crossorigin="anonymous"></script>
</head>
<body>
	<a class = "next_page" href="table.php"><i class="fa-solid fa-chevron-right"></i></a>
	<a href="register.php">Go to the Register Page</a>
	<fieldset id="surveyForm" class="surveyForm">
		<legend><strong>Login</strong></legend>
		<h1>
			<?php
				if (isset($_SESSION['login_error'])) {
					echo '<div class="error">' . $_SESSION['login_error'] . '</div>';
					unset($_SESSION['login_error']);
				}
			?>
		</h1>
		<form method="POST" action="process_form.php">
			<input type="hidden" name="form_type" value="login">
			<label for="email">Email:</label><br>
			<input id="email" name="email" class="username" type="email" placeholder="Enter your email" required><br>
			<label for="password">Password:</label><br>
			<input id="password" name="password" class="username" type="password" placeholder="Enter your password" required><br>
			<button class="submit">Login</button>
		</form>
	</fieldset>
</body>
</html>