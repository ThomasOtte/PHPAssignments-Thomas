<?php
date_default_timezone_set('America/Los_Angeles');

$othertime = date_default_timezone_get();

if (strcmp($othertime, ini_get('date.timezone'))){
	echo 'Script timezone differs from ini-set timezone.';
	} else {
		echo 'Script timezone and ini-set timezone match.';
}

echo "</br>";	

$date = new DateTime();
$date->setDate(1100,12,16);
echo $date->format('Y-m-d');

echo "</br>";

// DateTimeImmutable never modifies itself but returns a new object instead
$date = new DateTimeImmutable();
$date->setDate(1100,12,16);
echo $date->format('Y-m-d');

echo "</br>";

echo date('Y-m-d h:m:s') . "<br>";

echo date("l", mktime(0,0,0,7,31,2017)) . "</br>";

echo strtotime("now") . "</br>";

echo time("now") . "</br>";

echo microtime() . "</br>";

$date1 = new DateTime('1100-12-16');
echo $date1->format('Y-m-d H:i:s') . "</br>";
$date2 = $date1->add(new DateInterval('P1DT8H'));
echo $date2->format('Y-m-d H:i:s') . "</br>";

if ($date1 < $date2)
{
	echo "date 2 is earlier </br>";
}
else {
	echo "date 1 is earlier </br>";
}

echo time($date1) . "</br>";

$date = new DateTime('1100-12-16');
$date->modify('+1 day');
echo $date->format('Y-m-d');