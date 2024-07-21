<?php

/*
session_start();

class Database {

    const servername = "localhost";
    const username = "root";
    const password = "";
    const database_name = "student";
    
    public static $conn = null;
    
    public static function make_connection() {
        try {
            if (self::$conn === null) {
                self::$conn = new PDO(
                    "mysql:host=" . self::servername .
                    ";dbname=" . self::database_name,
                    self::username, self::password
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                echo "Connection Successful";
            }
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
        
        return self::$conn;
    }
    
    public static function prepare_query($query, array $params = []) {
        self::make_connection();
        $stmt = self::$conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
    
    public static function show_one_row($query, array $params = []) {
        $stmt = self::prepare_query($query, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function show_all($query, array $params = []) {
        $stmt = self::prepare_query($query, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public static function insert($query, array $params = []) {
        $stmt = self::prepare_query($query, $params);
        return self::$conn->lastInsertId();
    }
}
*/


// session_start();


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



// $db = new Database();
// $pract = $db->prepare_query("SELECT * FROM info;", []);
// $_SESSION["ID"] = 20;

/* unset($_SESSION);
if (array_key_exists("ID", $_SESSION)) {
	echo "The ID exists";
} else {
	echo "The Name doesn't exist";
} */
// var_dump($_SESSION);
// echo $_SESSION;
// unset($_SESSION);
/* echo "<br>";
var_dump($_SESSION); */
// echo "<br>";
// $one_row = $db->show_one_row('SELECT id, name, email FROM info WHERE id=20;',[]);
// var_dump($one_row);
// $ins = $db->insert("Insert into info (name, email, password) VALUES('user1', 'user1@gmail.com', '123456789')", []);
// var_dump($ins);
// echo "<br>";
// var_dump($ins);
/* foreach($one_row as $k=>$v) {
		echo $k." : ".$v."<br>";
		if ($_SESSION["ID"] == $v) {
			echo "Active User is ".$_SESSION["ID"]."<br>";
		}
	} */
// var_dump($row[6]);
/* $row = $db->show_all('SELECT * FROM info;',[]);
for($i=0;$i<count($row);$i++) {
	// var_dump($row[$i]);
	// $_SESSION["ID"] = $row[$i][1];
	echo "<br><br>";
	foreach($row[$i] as $k=>$v) {
		echo $k." : ".$v."<br>";
		if ($_SESSION["ID"] == $v) {
			echo "ID User is ".$_SESSION["ID"]."<br>";
		}
	}
} */



/* $conn = mysqli_connect(
	$servername,
	$username,
    $password,
	$database_name
); */

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