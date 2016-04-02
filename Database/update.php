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
	$id = 5;
	$menu_name = "Update a value";
	$position = 6;
	$visible = 1;
	//2. Perform database query
	$query = "UPDATE subjects SET";
	$query .= " menu_name = '{$menu_name}',";
	$query .= " position = {$position},";
	$query .= " visible = {$visible}";
	$query .= " WHERE id = {$id}";
	
		
	$result = mysqli_query($connection, $query);
	
	// Test if there was a query error
	if ($result && mysqli_affected_rows($connection) == 1) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	}
	else {
		//Failure
		// $message = "Subject creation failed.";
		die ("Database query failed. ".mysqli_error($connection));
	}
	//Only for insert
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




