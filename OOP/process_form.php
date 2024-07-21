<?php

session_start();

require_once "config.php";

require_once "translatesql.php";

class Auth {
	
	public static function signup() {
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$username = $_POST["username"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];
			
			if ($password == $confirm_password) {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$_SESSION['signup_error'] = "Invalid email address";
                    header("Location: register.php");
					exit();
				}
				
				
				$encrypted_password = password_hash($password, PASSWORD_BCRYPT);
				
				
				$db_s = new TranslateSQL();
				$show_e = $db_s->getByEmail($email);
				
				if ($show_e) {
					$_SESSION['signup_error'] = "The email " . $email . " already exists";
					header("Location: register.php");
					exit();
				} else {
					$db_s->create($username, $email, $encrypted_password);
					header("Location: login.php");
					exit();
				}
			
			} else {
				$_SESSION['signup_error'] = "Passwords don't match";
 				header("Location: register.php");
				exit(); 
			}
		}else {
			header("Location: process_form.php");
			exit();			
		}
	}



	public static function login() {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$email = $_POST["email"];
			$password = $_POST["password"];
			
			
			$db_e = new TranslateSQL();
			$user = $db_e->getByEmail($email);
			
			if ($email === $user["email"] || password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["username"] = $user["name"];
                $_SESSION["loggedin"] = true;
				header("Location: table.php");
                exit();
            } else {
                $_SESSION['login_error'] = "Invalid Credentials";
                header("Location: login.php");
                exit();
            }
		} else {
			header("Location: process_form.php");
			exit();
		}
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$form_type = $_POST["form_type"];
	if ($form_type == 'login') {
		Auth::login();
	} else {
		Auth::signup();
	}	
} else {
	header("Location: process_form.php");
}


?>

