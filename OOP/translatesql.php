<?php


require_once "config.php";


class TranslateSQL {
		
	
	public function getAll() {
		$query = "SELECT * FROM info";
		return Database::show_all($query);
	}
	
	public function create($username, $email, $password) {
		$query = "
			Insert into info (name, email, password)
			VALUES (
				:username,
				:email,
				:password
			)";
			$param = [
				':username' => $username,
				':email' => $email,
				':password' => $password
			];
		return Database::insert($query, $param);
	}
	
	public function getById($id) {
		$query = "
			SELECT id, name, email FROM info WHERE id=:id
		";
		$param = [":id" => $id];
		return Database::show_one_row($query, $param);
	}
	
	public function getByEmail($email) {
		$query = "
			SELECT id, name, email, password FROM info WHERE email=:email
		";
		$param = [":email" => $email];
		return Database::show_one_row($query, $param);
	}
}



?>