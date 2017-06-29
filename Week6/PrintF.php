<?php
if (!($file = fopen('Files/PrintF.txt', 'w'))) {
	return;
}
$text1= "Hello";
$text2 = "Worlds";
$number1 = 15;

fprintf($file, "%s %d %s", $text1, $number1, $text2);