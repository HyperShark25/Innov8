<?php

class Database {

	const servername = "localhost";
	const username = "root";
	const password = "";
	const database_name = "student";
	
	public static $conn = null;
	
	
	
	public static function make_connection() {
		try {
			self::$conn = new PDO(
				"mysql:host=".self::servername.
				";dbname=".self::database_name,
				self::username, self::password
			);
			self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			// echo "Connection Successful";
		} catch (PDOException $e) {
			echo "Connection Failed: ".$e->getMessage();
		}
		
		return self::$conn;
	}
	
	
 	public static function prepare_query ($query, array $par=[]) {
		self::make_connection();
		$stmt = self::$conn->prepare($query);
		$stmt->execute($par);
		return $stmt;
	}
	
	
	public static function show_one_row($query, array $par=[]) {
		$stmt = self::prepare_query($query, $par);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	
	public static function show_all($query, array $par=[]) {
		$stmt = self::prepare_query($query, $par);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	
	
	public static function insert($query, array $par=[]) {
		$stmt = self::prepare_query($query, $par);
		return self::$conn->lastInsertId();
	}
	
}

?>
