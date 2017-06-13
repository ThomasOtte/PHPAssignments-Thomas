<? echo "This used a short tag"; ?>

<?php echo "This used a standard tag"?>

<?php 
// Single line commment #1
# Single line comment #2

/*
Multi-line 
Comment
#1
*/

echo "<br><br>";

$values = array("word", 1.1 , true, 1);

foreach ($values as $value)
{
	echo "$value is a " .gettype($value) . ".<br>";
	
	echo "casting value to string.....<br>";
	$cast = (string) $value;
	echo "$cast is now a " .gettype($cast). "<br>";
}

$object = (object) $values;
var_dump($object);

echo "<br><br>";

$a = "hello";
$$a = "world";

echo $hello;

echo "<br><br>";

define("WORLD", "Hello World");
echo WORLD;

echo "<br><br>";

$dump = "Hello";
var_dump($dump);echo "<br>";
print_r($dump);echo "<br>";
debug_zval_dump($dump);echo "<br>";

echo "<br><br>";

$x = 10;
$y = 7;

echo "$x += $y is ";
$x += $y;
echo $x . "<br>";

$x = 10;
$y = 7;

$result = $x + $y;
echo "$x + $y = " . $result . "<br>";

if ($x == $y)
{
	echo "$x and $y are the same number <br>";
}
else 
{
	echo "$x and $y aren't the same number <br>";
}

$x = 10;
$y = 7;

$result = $x and $y;
echo "$x and $y = " . $result . "<br>";

echo "<br><br>";

$x = 10;
$y = 7;

$result = $x & $y;
echo "$x & $y = " . $result . "<br>";

/*
$file = @file ('non_existent_file') or
die ("Failed opening file: error was '$php_errormsg' <br>	");
*/

/*
$host = 'www.google.com';
echo `ping -n 3 {$host}`;
*/
echo "<br>";
$x = 10;
$x++;
echo $x;

echo "<br>";

class Class1
{
}

class Class2
{
}
$a = new Class1;

var_dump($a instanceof Class1);
var_dump($a instanceof Class2);

echo "<br><br>";

$x = "potato";
$y = "carrot";

if ($x == "apple")
{
	echo "x is an apple";
}
else if ($x == "potato")
{
	if ($y == "carrot")
	{
		echo "x is a tomato and y is a carrot";
	}
	else {
		echo "x is a tomato and y is not a carrot";
	}
}
else 
{
	echo "x is not found";
}

echo "<br><br>";

$x = "apple";
$tern = ($x == "carrot") ? 'apple' : 'not apple';
echo $tern;

/*
if ($x == "carrot) {
	$tern = 'apple';
} else {
	$tern = 'not apple';
}
*/

echo "<br><br>";

$x = NULL;
if (empty($x))
{
	echo "\$x is empty";
}
else
{
	echo "\$x is not empty";
}

echo "<br><br>";

$x = 5;

switch ($x) {
	case 1:
		echo "x equals 1";
		break;
	case 2:
		echo "x equals 2";
		break;
	case 3:
		echo "x equals 3";
		break;
	default:
		echo "x is outside of program boundaries";
		break;
}

echo "<br><br>";

$value1 = 1;
while ($value1 < 10)
{
	if ($value1 == 5)
	{
		break;
	}
	echo "abc ";
	$value1++;
}

echo "<br><br>";


$value2 = 1;
do
{
	if ($value2 == 5)
	{
		break;
	}
	echo "xyz ";
	$value2++;
}
while ($value2 < 10);

echo "<br><br>";

for ($i=1; $i<=12; $i++){
	if ($i % 2) {
		continue;
	}
	$result = $i ** 2;
	echo "$i^2 = $result <br>";
}

?>
