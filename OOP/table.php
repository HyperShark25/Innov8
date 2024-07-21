<?php


require "translatesql.php";

session_start();

if (!isset($_SESSION["loggedin"])) {
	header("Location:login.php");
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/7c094c270d.js" crossorigin="anonymous"></script>
</head>
<body>
	<div>
		<table>
			<a class = "prev_page" href="logout.php"><i class="fa-solid fa-chevron-left"></i></a>
			<caption id="table-title">
				<?php
					echo "Hello ".$_SESSION["username"];
				?>
			</caption><br>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Your Password</th>
				</tr>
			</thead>
			<tbody>
				<?php
 					$db_show_all = new TranslateSQL();
					$arr_data = $db_show_all->getAll();
					for($i=0; $i<count($arr_data);$i++) {
						echo "
							<tr class='row'>
								<td>".$arr_data[$i]["ID"]."</td>
								<td>".$arr_data[$i]["name"]."</td>
								<td>".$arr_data[$i]["email"]."</td>
								<td>".$arr_data[$i]["password"]."</td>
							</tr>
						";
					}
				?>
			</tbody>
		</table>
	</div>
	<script src="scr.js"></script>
</body>
</html>


<?php



?>