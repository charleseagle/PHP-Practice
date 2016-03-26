<?php

$name = "test";
$value = "hello";
$expire =  time() + (60*60*24*7);
//setcookie($name, $value, $expire);
//setcookie($name, $value, time() -3600);
//setcookie($name, null, time() -3600);
?>

<!DOCTYPE html>
<html>
<head>
	<title> Cookies </title>
</head>

<body>
<pre>
	<?php 
	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "no";
/* 	if (isset($_COOKIE["tests"])) {
		$test = $_COOKIE["test"];
	}
	else {
		$test = "no";
	} */
		
		echo $test;
	?>
</pre>
</body>

</html>



