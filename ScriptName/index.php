<?php

include 'header.inc.php';

$script_name = $_SERVER['SCRIPT_NAME'];

echo $script_name.'<br>';

if(isset($_POST['submit'])) {
	echo 'Process 1';
}
?>

