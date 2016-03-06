<?php

$xml = simplexml_load_file('example.xml');
foreach ($xml->producer as $prod) {
	echo $prod->name.' ('.$prod->age.')<br>';
	foreach ($prod-> show as $show) {
		echo $show->showname.' on '.$show->showdate.'<br>';
	}
}


?>