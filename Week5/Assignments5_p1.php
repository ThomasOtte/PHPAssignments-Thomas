<?php
session_id("ses1");
session_start();

$_SESSION["number"] = 5;

echo $_SESSION["number"] . "<br>";

session_destroy();
$_SESSION = [];

echo $_SESSION["number"] . "<br>";

echo "<br><br>";

setrawcookie("numberandnumber1","1and2");
echo $_COOKIE["numberandnumber1"] . "<br>";

setcookie("numberandnumber2","3 and 4");
echo $_COOKIE["numberandnumber2"] . "<br>";

var_dump($_REQUEST);

echo "<br><br>";
		
setcookie("serarray1",serialize(array("fname"=>"Apple", "lname"=>"Pizza", "password"=>"Hello")));

var_dump($_COOKIE["serarray1"]);
$unseri = unserialize($_COOKIE["serarray1"]);
var_dump($unseri);

echo "<br><br>";

$array2 = array("a"=>"b","c"=>3,"hello"=>"world");

$encoded = json_encode($array2);
echo $encoded;

echo "<br><br>";

$decoded = json_decode($encoded);
var_dump($decoded);
echo $decoded->{'a'};