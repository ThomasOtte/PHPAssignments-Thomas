<?php
$finfo =  finfo_open(FILEINFO_MIME_TYPE);

echo finfo_file($finfo, "Files/Info.txt");