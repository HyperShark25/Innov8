<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Page</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/7c094c270d.js" crossorigin="anonymous"></script>
</head>
<body>
	<a class = "next_page" href="table.php"><i class="fa-solid fa-chevron-right"></i></a>
	<a href="login.php">Go to the Login page</a>
	<fieldset id="surveyForm" class="surveyForm">
		<legend><strong>Sign Up</strong></legend>
		<h1>
			<?php
			if (isset($_SESSION['signup_error'])) {
				echo '<div class="error">' . $_SESSION['signup_error'] . '</div>';
				unset($_SESSION['signup_error']);
			}
		?>
		</h1>
		<form method="POST" action="process_form.php">
			<input type="hidden" name="form_type" value="signup">
			<label for="username">Username:</label><br>
			<input id="username" name="username" class="username" type="text" placeholder="Enter your username" required><br>
			<label for="email">Email:</label><br>
			<input id="email" name="email" class="username" type="email" placeholder="Enter your email" required><br>
			<label for="password">Password:</label><br>
			<input id="password" name="password" class="username" type="password" placeholder="Enter your password" required><br>
			<label for="confirm_password">Confirm Password:</label><br>
			<input id="confirm_password" name="confirm_password" class="username" type="password" placeholder="Confirm your password" required><br>
			<button class="submit">Sign Up</button>
		</form>
	</fieldset>
</body>
</html>