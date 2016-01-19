<?php
$number = 10;
switch ($number) {
	case 1:
		echo 'One';
	break;
	
	case 2:
		echo 'Two';
	break;
	
	case 3:
		echo 'Three';
	break;
	
	default:
		echo 'Number not found. <br><br>';
	break;
}


//die('ERROR. PAGE HAS ENDED.'); //or 'exit()';


$day = 'Sunday';
switch ($day) {
	case 'Saturday':
	case 'Sunday':
		echo 'It\'s a weekend. <br>';
	break;
	
	default:
		echo 'Not a weekend<br>';
	break;
}

@mysql_connect('localhostas','root','') or die('Could not connect to database.');
echo 'Connected!';
?>


