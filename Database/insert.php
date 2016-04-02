<?php

	//1. Create a database connection_aborted
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "cms";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	//Test if connection occurred
	if (mysqli_connect_errno()) {
		die("Database connection failed: ".
			mysqli_connect_error().
			"(".mysqli_connect_errno().")"
		);
	}
?>

<?php
	// Often these are form values in $_POST
	$menu_name = "Today's Widget Trivia 1";
	$position = (int) 6;
	$visible = (int) 1;
	//Escaple all strings
	$menu_name = mysqli_real_escape_string($connection, $menu_name);
	//2. Perform database query
	$query = "INSERT INTO subjects (menu_name, position, visible)";
	$query .= " VALUES ('{$menu_name}', {$position}, {$visible})";
	
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	}
	else {
		//Failure
		// $message = "Subject creation failed.";
		die ("Database query failed. ".mysqli_error($connection));
	}
	
	echo "<br />".$id = mysqli_insert_id($connection);
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title> Databases </title>
	</head>
	<body>
	
	
	</body>
</html>

<?php
	//5. Close database connection
	mysqli_close($connection);
?>




