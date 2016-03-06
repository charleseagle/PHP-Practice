<?php

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($name)) {
		$handle = fopen('name.txt', 'a');
		fwrite($handle, $name."\n");		
		fclose($handle);
		
		echo 'Current names in file: ';
		
		$readin = file('name.txt');
		$readin_count = count($readin);
		$count = 1;
		foreach($readin as $fname) {
			echo trim($fname);
			if ($count != $readin_count) {
				echo ', ';
			}
			else {
				echo '.';
			}
			$count++;
		}
	}
	else {
		echo 'Please type a name.';
	}
}
?>

<form action="file.php" method="POST">
Name: <br>
<input type="text" name="name">
<input type="submit" value="Submit">

</form>