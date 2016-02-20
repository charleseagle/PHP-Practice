<?php

$food = array('Pasta', 'Pizza', 'Salad', 'Vegetables');

$food[4] = 'Fruits';
echo $food[2].'<br><br>';
print_r($food);
echo '<br><br>';

$food1 = array('Pasta' => 300, 'Pizza' => 1000, 'Salad' => 150, 'Vegetables' => 50);
print_r($food1);
echo '<br><br>';
echo $food1['Pizza'];
echo '<br><br>';


$food2 = array('Healthy' => array('Salad', 'Vegetables', 'Pasta'), 
			'Unhealthy' => array('Pizza', 'Ice cream', 'Popcorn'));
echo $food2['Healthy'][1].'<br>';
print_r($food2);
echo '<br><br>';

foreach($food2 as $element => $inner_array) {
	echo '<strong>'.$element.'</strong><br>';
	foreach($inner_array as $item) {
		echo $item.'<br>';
	}
}
?>


