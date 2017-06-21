<?php
$basic = array("A","B","C");
var_dump($basic);

echo "<br><br>";

$asso = array("A"=>"B","C"=>"D","E"=>"F");
var_dump($asso);

echo "<br><br>";

$short = [1,2,3,4];
var_dump($short);

echo "<br><br>";

$multi = array(array(1,2,3),array("A","B","C"),array(4,5,6));
var_dump($multi);

echo "<br><br>";

$range = range(0,100,10);
var_dump($range);

echo "<br><br>";

$basic = array(1,2,3,4);
var_dump($basic);
$slice = array_slice($basic,2);
var_dump($slice);

echo "<br><br>";

$basic = array(1,2,3,4);
var_dump($basic);
$push = array_push($basic,5,6);
var_dump($basic);
$basic = array(1,2,3,4);
$unshift=array_unshift($basic, 5,6);
var_dump($basic);

echo "<br><br>";

$basic = array(1,2,3,4);
var_dump($basic);
$pop = array_pop($basic);
var_dump($basic);
$basic = array(1,2,3,4);
$shift = array_shift($basic);
var_dump($basic);

echo "<br><br>";

$basic = array(1,2,3,4);
var_dump($basic);
$count = count($basic);
var_dump($count);

echo "<br><br>";

$basic = array(1,2,3,4);
var_dump($basic);
$length = count($basic);

for($i = 0; $i < $length; $i++) {
    echo $basic[$i], "<br>";
}
foreach ($basic as $step)
{
	echo $step . "<br>";
}
foreach ($basic as $s => $step)
{
	echo $s . " => " . $step . "<br>";
}

echo "<br><br>";

$basic = array(1,2,3,4);
var_dump($basic);

function incrarray($value, $key)
{
	$value++;
	echo "$key => $value <br>";
}

array_walk($basic,"incrarray");

echo "<br><br>";

$asso = array("A"=>"B","C"=>"D","E"=>"F");
if (array_key_exists("C",$asso))
{
	echo "Key exists <br>";
}
else
{
	echo "Key doesn't exist <br>";
}

echo "<br><br>";

$asso = array("A"=>"B","C"=>"D","E"=>"F");
if (in_array("B",$asso))
{
	echo "Element exists <br>";
}
else
{
	echo "Element doesn't exist <br>";
}

echo "<br><br>";

$asso = array("A"=>"B","C"=>"D","E"=>"F");
var_dump(array_keys($asso));

echo "<br><br>";

$asso = array("A"=>"B","C"=>"D","E"=>"F");
var_dump(array_values($asso));

echo "<br><br>";

$sort = array("1"=>"Apple","B"=>"3Pears","L"=>"potato");
var_dump($sort);
$locale = sort($sort, SORT_LOCALE_STRING);
var_dump($sort);
$numeric = sort($sort, SORT_NUMERIC);
var_dump($sort);
$regular = sort($sort, SORT_REGULAR);
var_dump($sort);
$string = sort($sort, SORT_STRING);
var_dump($sort);

echo "<br><br>";

function elemsort($ele1,$ele2)
{
	if ($ele1==$ele2) return 0;
	return ($ele1<$ele2)?-1:1;
}

$sort = array("1"=>"Apple","B"=>"3Pears","L"=>"potato");
var_dump($sort);
rsort($sort); //sort array in revurse order
var_dump($sort);
asort($sort); //sort an array and maintain index association
var_dump($sort);
arsort($sort); //sort an array in reverse order and maintain index association
var_dump($sort);
ksort($sort); //sort an array by key
var_dump($sort);
krsort($sort); //sort an array by key in reverse order
var_dump($sort);
usort($sort, "elemsort"); //sort an array by values using a user-defined comparison function
var_dump($sort);
natsort($sort); //sort an array using a "natural order" algorithm
var_dump($sort);

echo "<br><br>";

$merge1 = array(1,2);
$merge2 = array(3,4);
var_dump($merge1);
var_dump($merge2);
$merged= array_merge($merge1,$merge2);
var_dump($merged);

echo "<br><br>";

$diff1 = array(1,2,3,4,5);
$diff2 = array(1,2,3);
var_dump($diff1);
var_dump($diff2);
$diffed = array_diff($diff1,$diff2);
var_dump($diffed);

echo "<br><br>";

$asso1 = array("A"=>"1","C"=>"D","E"=>"F");
$asso2 = array("A"=>"B","2"=>"D","3"=>"F");

// compares both the keys and values of arrays
$diffasso = array_diff_assoc($asso1, $asso2);
var_dump($diffasso);

// compares only the keys of arrays
$diffkey = array_diff_key($asso1,$asso2);
var_dump($diffkey);

// compares both the keys and values of arrays with an aditional index check
$diffuasso = array_diff_uassoc($asso1, $asso2, "elemsort");
var_dump($diffuasso);

// compares only the keys of arrays with an aditional index check
$diffukey = array_diff_ukey($asso1,$asso2, "elemsort");
var_dump($diffukey);
