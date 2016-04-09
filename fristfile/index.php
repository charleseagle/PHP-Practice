<?php
$name = 'Charles';
$age = 19;
if (strtolower($name) == 'charles') {
	if ($age >= 39) {
		echo 'You\'re over 39. ';
		if ( 1 == 1) {
			echo 'Yes, 1 is equal to 1!';
		}
	}
	else {
		echo 'Not over 39';
	}
}
else {
	echo 'You\'re not Charles';
}
?>
