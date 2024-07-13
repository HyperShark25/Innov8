<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "student";

$conn = mysqli_connect(
	$servername,
	$username,
    $password,
	$database_name
);

/* if (!$conn) {
	echo "Connection Failed: ".mysqli_connect_error();
} else {
	echo "Connection Successfull";
} */

?>