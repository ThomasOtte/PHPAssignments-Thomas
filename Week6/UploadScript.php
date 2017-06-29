<?php
$file = "Files/" . basename($_FILES['File']['name']);

$name = basename($_FILES['File']['name']);
$mime = mime_content_type($file);
$size = filesize($file) . " bytes";

$nameNoExtension = preg_replace("/\.[^.]+$/", "", $name);

$writefile = fopen('Files/' . $nameNoExtension. '.txt', "w");
$text = $name . PHP_EOL  . $mime . PHP_EOL  . $size;

fwrite($writefile, $text);
fclose($writefile);