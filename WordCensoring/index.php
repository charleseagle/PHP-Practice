<?php

$find = array('alex', 'billy','dale');
$replace = array('a**x','b**y','d**e');

if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
	$user_input1 = $_POST['user_input'];
	$user_input_lc = strtolower($user_input1);
	$user_input_new = str_ireplace($find, $replace, $user_input1);
	echo $user_input_new;
}

?>
<hr>
<form action="index.php" method="POST">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input1;?></textarea><br><br>
	<input type="submit" value="Submit">
</form>