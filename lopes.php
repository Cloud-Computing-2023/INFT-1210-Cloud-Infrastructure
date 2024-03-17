<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Caf&eacute;!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center"> Viviana Lopes Caf&eacute;</div>
	</div>
	<br>
	<hr>
	<div class="topnav">
		<a href="index.html">Home</a>
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			<table>
				<tr>
					<td><img src="images/Coffee-and-Pastries.jpg" height=auto width="490"></td>
					<td><img src="images/Cake-Vitrine.jpg" height=auto width="450"></td>
				</tr>
			</table>
			<hr>
			<div id="header" class="mainHeader"><p>Lopes caf&eacute; Employee List!</p></div>
			<br>

		<?php
		$connection_string = "host=lopesauroradbcluster.cluster-cfwsog6wiv6o.us-east-1.rds.amazonaws.com port=5432 dbname=lopesdatabase user=postgres password=postgres";
		$connection = pg_connect($connection_string) or die("Could not connect to the database: " . pg_last_error());


		$query = "SELECT * FROM employee";
		$result = pg_query($connection, $query) or die("Error reading data: " . pg_last_error());
        echo "<table border='1'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Position</th><th>Timestamp</th></tr>";
    
		while ($row = pg_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["position"]. "</td><td>" . $row["created_at"]. "</td></tr>";
    
		}
        echo "</table>";

		?>
		</div>
	</div>
</body> 
</html>