<?php
require_once "config.php";


$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];
$phone = $_POST["phone"];

var_dump($username);

$stmt = "
	INSERT into info (
		name,
		email,
		age,
		phone
	) VALUES (
			'$username',
			'$email',
			'$age',
			'$phone'
		)";


$exec = $conn->query($stmt);

if ($exec === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $stmt->error;
}


$conn->close();

header("location: table.php");

?>