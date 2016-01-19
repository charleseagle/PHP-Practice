<?php

/* $number1 = 10;
$number2 = 5; */
function add($number1, $number2) {
	$result = $number1 + $number2;
	return $result;
}
function divide($number1, $number2) {
	$result = $number1 / $number2;
	return $result;
}
$sum = divide(add(10,10),add(5,5));
echo $sum.'<br>';


function displayDate($day, $date, $year) {
	echo $day.' '.$date.' '.$year;
}
displayDate('Monday', 31, 2016);
?>


