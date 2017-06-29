<?php
$text = array
(
		"1,Apple,Pizza,12-07-1996",
		"2,Potato,Carrot,18-05-2000",
);

$file = fopen("Files/CSVFile.csv","w");

foreach ($text as $line)
{
	fputcsv($file,explode(',',$line));
}

fclose($file); ?>