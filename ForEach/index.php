<!DOCTYPE html>

<html>
<head>

</head>

<body>

<?php


	$number = array(1,3,4,5);
	foreach($number as $num) {
		echo "$num<br>";
	}

?>
<pre>
<?php
echo $number_string = implode("*", $number).'<br>';
print_r(explode("*", $number_string));
?>
</pre>
</body>

</html>

