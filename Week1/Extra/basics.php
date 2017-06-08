<?php
echo "Hello, World";

echo "<br>";
echo "<br>";

$twinkle = "Twinkle, Twinkle little star";
echo $twinkle;

echo "<br>";
echo "<br>";

$x = 10;
$y = 7;

$operators = array("+", "-", "*", "/", "%");

foreach ($operators as $op)
{
	$sum = "$x$op$y";
	$result = eval('return ' .$sum . ';');
	echo "$x $op $y = $result";
	echo "<br>";
}

echo "<br>";
echo "<br>";

$number = 8;
echo "Value is now $number.<br>";

$number += 2;
echo "Add 2. Value is now $number. <br>";

$number -= 4;
echo "Subtract 4. Value is now $number. <br>";

$number *= 5;
echo "Multiply by 5. Value is now $number. <br>";

$number /= 3;
echo "Divide by 3. Value is now $number. <br>";

$number++;
echo "Increment value by one. Value is now $number.<br>";

$number--;
echo "Decrement value by one. Value is now $number.";

echo "<br>";
echo "<br>";

$name='Harry';
$age=28;

var_dump($name);
echo "<br>";

print_r($name);
echo "<br>";

var_dump($age);
echo "<br>";

$name=null;

var_dump($name);

echo "<br>";
echo "<br>";

$string = "around";
echo 'What goes ' . $string . ' comes ' . $string . '.';

echo "<br>";
echo "<br>";

$values = array("string", 1.1 , true, 1, null);

foreach ($values as $value)
{
echo "Value is " .gettype($value) . ".<br>";
}