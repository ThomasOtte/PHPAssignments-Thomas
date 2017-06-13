<?php

// This function will echo "Hello World" when called
function hello()
{
	echo "Hello World";
}

hello();

echo "<br><br>";

// This function will solve an equation when called
function math($x)
{
	$result = 7*$x;
	echo $result;
}

math(7);

echo "<br><br>";

// This function will solve an equation and return the answer when called
function returner()
{
	$result = 7*4;
	return $result;
}

$getresult = returner();
echo $getresult;

echo "<br><br>";

$x = 7; //global scope

function global1()
{
	//using x inside the function will return an error
	echo $x;
}

global1();

echo "<br><br>";

function global2()
{
	$y = 7; //local scope
	//this echo will work because the variable is in the local scope
	echo $y;
}

global2();
// this echo will work because the variable is in the local scope, but de variable is called in
// the global scope
echo $y;

echo "<br><br>";

$h = 4;
$z = 7;

function global3()
{
	global $h; //this imports $h into the local scope
	$h += 2;
	$GLOBALS['z'] += 2; //$GLOBALS is an array containing references  to all variables which 
						//are currently defined in the global scope of the script
}
global3();
echo $h . "<br>";
echo $z;

echo "<br><br>";

//this function counts the amount of arguments and returns an array of the arguments
function argCount()
{
	$argcount = func_num_args();
	echo $argcount . "<br>";
	
	for ($i = 0; $i < $argcount; $i++) 
	{
		echo func_get_arg($i) . "<br>";
	}
}

argCount(1,2,3,4);

echo "<br><br>";

//this function sums up the arguments ,using the variadics function,  given with the function call
function scalarSum(int ...$ints) {
	$result = array_sum($ints);
	echo $result;
}
scalarSum(5, '7', 8.45);

echo "<br><br>";

//this function returns a sum of the arguments given with the function call
//and then var_dumps the result
function returnDecl(int ...$ints)
{
	return array_sum($ints);
}

var_dump(returnDecl(1, '2', 3.1));

echo "<br><br>";

//this function changes a variable via a passby reference
function passBy(&$pass)
{
	$pass = "World";
}

$pass = "Hello";
passBy($pass);
echo $pass;

echo "<br><br>";

//this function unpacks an array given with the function call and multplies the values
function unpacker($a, $b)
{
	return $a * $b;
}

echo (unpacker(...[3,4]));

echo "<br><br>";