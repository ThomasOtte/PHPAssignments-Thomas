<?php
$file = fopen("Files/PassThru.txt","r");

echo fpassthru($file);

fclose($file);