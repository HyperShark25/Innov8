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
// This is the database code done to create the student table
/*
CREATE TABLE `student`.`info` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `age` INT NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) VISIBLE);
*/
?>