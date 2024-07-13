<?php

require_once "config.php";


$sql = "SELECT * FROM info";


$result = mysqli_query($conn, $sql);


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
			<a class = "prev_page" href="file.html"><i class="fa-solid fa-chevron-left"></i></a>
			<caption id="table-title">Students Records</caption><br>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Age</th>
					<th>Phone Number</th>
				</tr>
			</thead>
			<tbody>
				<?php
				
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr class='row'>
						<td>".$row['ID']."</td>
						<td>".$row['name']."</td>
						<td>".$row['email']."</td>
						<td>".$row['age']."</td>
						<td>".$row['phone']."</td>
						</tr>";						
					}
				?>
			</tbody>
		</table>
	</div>
	<script src="scr.js"></script>
</body>
</html>


<?php

mysqli_close($conn);


?>