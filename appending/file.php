<?php

/* $handle = fopen('names.txt', 'a');

fwrite($handle, "\n".'Steve'."\n");

fclose($handle);
 */
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($name)) {
		echo 'OK';
		$handle = fopen('names.txt', 'a');
		fwrite($handle, $name."\n");
		fclose($handle);
	}
	else {
		echo 'Please type a name.';
	}
}
 
?>

<form action="file.php" method="POST">
Name: <br>
<input type="text" name="name"><br>
<input type="submit" value="Submit">
</form>