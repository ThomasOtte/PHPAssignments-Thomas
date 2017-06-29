<?php
$writefile = fopen('Files/EditMe.txt', "w+");
$text = "Hello World!";
fwrite($writefile, $text);
fclose($writefile);

$writefile = fopen('Files/EditMe.txt', "a+");
$text = PHP_EOL . "What a wonderfull day!" . PHP_EOL . "This file was last edited on " . date("d-m-Y");
fwrite($writefile, $text);
fclose($writefile);

$readfile = fopen('Files/EditMe.txt', "r");
echo fread($readfile, filesize('Files/EditMe.txt'));
fclose($readfile);