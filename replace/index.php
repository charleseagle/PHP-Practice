<?php

$string = 'This part don\'t search. This part search.';
$string_new = substr_replace($string, 'eagle', 29, 4);
echo $string_new;
echo '<br><br>';

$find = array('is','string','example');
$replace = array('IS','STRING','EXAMPLE');
$string1 = 'This is a string, and is an example.';
$new_string = str_replace($find, $replace, $string1);
echo $new_string;
?>