<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'a_database';
$conn_error = 'Unable to connect to database';
if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || 
!@mysql_select_db($mysql_db)) {
	die($conn_error);
}
?>

