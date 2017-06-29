<?php
$file = file_get_contents("Files/GetContent.txt");
echo $file . "<br>";

$text = "BYEEEEEEEEEEEEEEEE WOOOOOOOOOOOOOOOOOOOOOOOOORLD";

$newfile = file_put_contents("Files/GetContent.txt", $text);
