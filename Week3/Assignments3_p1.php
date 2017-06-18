<?php
Header('Content-type: text/plain');

$quotes = "Hello";
echo 'With single quotes you get: $quotes World ';
echo "\nWith double quotes you get: $quotes World";

echo "\n\n";

echo "Hello \t\011World \n"; // \t or \011 = tab
echo "Hello \rWorld \n"; // \r = carriage
echo "Hello \040\040World \n"; // \040 = space

echo "\n\n";

//Heredoc
echo <<<EOT
$quotes
World
How are you \n \n
EOT;

//Nowdoc
echo <<<'EOT'
$quotes
World
How are you
EOT;

echo "\n\n";

$str = "potato carrot";
$length = strlen($str); // Counts the number of characters in a string
echo "$str is $length characters long \n";
$strstr = strstr($str, "ot"); // Finds the first occurence of a string
echo "$strstr \n";

echo "\n\n";

$str = "potato carrot";
$midnum = round(strlen($str) / 2);
$midchar = substr($str, $midnum, 1);
print "$midchar is the middle character of \"$str\" \n";
$replchar = "d";
$replstr = substr_replace($str, $replchar,$midnum, 1);
print $replstr;

echo "\n\n";

$str1= 'False';
$str2= 0;

if ($str1 == $str2)
{
	echo "$str1 and $str2 are the same in a loosely equal comparison";
}
else {
	echo "$str1 and $str2 aren't the same in a loosely equal comparison";
}

if ($str1 === $str2)
{
	echo "$str1 and $str2 are the same in a strict identical comparison";
}
else {
	echo "$str1 and $str2 aren't the same in a stric identical comparison";
}

echo "\n\n";

$str1 = "Apple";
$str2 = "apple";

if (strcmp($str1, $str2)!==0)
{
	echo "$str1 and $str2 aren't the same word with case-sensitivity \n";
}
else {
	echo "$str1 and $str2 are the same word with case-sensitivity \n";
}

if (strcasecmp($str1, $str2)!==0)
{
	echo "$str1 and $str2 aren't the same word with case-insensitivity \n";
}
else {
	echo "$str1 and $str2 are the same word with case-insensitivity \n";
}

if (substr_compare($str1, "ppl",1, 3) !==0)
{
	echo "$str1 doesn't contain \"ppl\"";
}
else {
	echo "$str1 contains \"ppl\"";
}

echo "\n\n";

$str1 = "Apple";

echo strpos($str1, "pl") . "\n"; //this function looks for a string needle in a string haystack and returns the offset from which the needle is found
echo strstr($str1, "p") . "\n"; // this function looks for a string needle in a string haystack and returns the string haystack from the first occurence of the string needle on
echo stripos($str1, "PPL") . "\n"; // does the same as strpost(), but is case-insensitive
echo stristr($str1, "P") . "\n";// does the same as strstr(), but is case-insensitive

echo "\n\n";

$str1 = "12345Apples";
$str2 = "54321";
$str3 = "APPLES";
$array1 = array("p", "l", "s");
$array2 = array("P", "L", "S");

echo strspn($str1, "1234567890") . "\n"; //Finds the length of the initial segment of a string consisting entirely of characters contained within a given mask.
echo strcspn($str1, "4") . "\n"; // Find length of initial segment not matching mask
echo str_replace($str1, $str2, $str1) . "\n"; // Replace all occurrences of the search string with the replacement string
echo str_replace($array1, $str2, $str1) . "\n";
echo str_ireplace($str3, "apples", $str1) . "\n";// Case-insensitive version of str_replace().
echo str_ireplace($array2, "apples", $str1) . "\n";
echo substr_replace($str1, $str2, 4) . "\n"; // Replace text within a portion of a string
echo substr_replace($str1, $array1[2], 4) . "\n";

echo "\n\n";

setlocale(LC_ALL, 'nld_nld');
echo strftime("%A %d %B %Y");

echo "\n\n";

$number= 1234567.89;
$dutch_format = number_format($number, 5, ',', '');
echo $dutch_format ."\n";
/*
NOT USABLE ON WINDOWS
setlocale(LC_MONETARY, 'nld_nld');
echo money_format('%i', $number) . "\n";
*/
setlocale(LC_ALL, 'NULL');
echo "\n\n";

printf("%s %s \n", "Hello", "World"); // this function outputs a formatted string
echo sprintf("%d %s \n", 11, 'Worlds'); // this function returns a formatted string

$writer = fopen('test.txt', 'w');
fprintf($writer,"%s %s \n", "Hello", "World"); // this function writes a formatted string to as stream

echo "\n\n";

$size = "1.15m";
sscanf($size,"%d.%dm",$meters,$centi);

echo "$size = $meters meters and $centi centimeters";

echo "\n\n";

// this function matches the values of a regular expression with the contents of a string
if (preg_match("(a|b|c)","d"))
{
	echo "Answer is wrong \n";	
}
else {
	echo "Answer is right \n";
}

// this function matches the values of a regular expression with the contents of a string globally
preg_match_all("(apple|potato|carrot)", "I would like an apple, a potato or a carrot", $matches, PREG_SET_ORDER);
foreach ($matches as $match)
{
	echo $match[0];
}
echo "\n";
// this function replaces parts of a string which match teh regular expression
echo preg_replace("(a|b|c)", "1", "abcdefghi");
?>