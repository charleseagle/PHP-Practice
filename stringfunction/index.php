<?php

$string = 'This is an example string & this is a good one.';
$string_word_count = str_word_count($string, 2, '&.');
print_r($string_word_count);
echo '<br><br>';

$string1 = 'abcdefghijklmnopqrstuvwxyz1234567890';
$string_shuffled = str_shuffle($string1);
$half = substr($string_shuffled, 0, strlen($string)/2);
echo $half;
echo '<br><br>';

$string2 = 'image.jpg';
$string_reversed = strrev($string2);
echo $string_reversed;
echo '<br><br>';

$string3 = 'This is my essay. I\'m going to be talking about php.';
$string4 = 'This is my essay. I will be talking about the subject php.';

similar_text($string3, $string4, $result);
echo 'The similarity between is, '.$result;
echo '<br><br>';

$string5 = 'This is an example string.';
$string_length = strlen($string5);
echo $string_length;
echo '<br><br>';

$string6 = 'This is an example string.  ';
$string_trimmed = trim($string6);
echo $string_trimmed;
echo '<br><br>';

$string7 = 'This is a <img src="image.jpg"> string';
$string_slashes = htmlentities(addslashes($string7));
echo $string_slashes;
echo '<br>';
echo stripslashes($string_slashes);
echo '<br><br>';

?>


