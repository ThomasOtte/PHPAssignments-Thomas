<?php
$month = date('F', time());
if ($month == "August")
{
	echo "It's August, so it's really hot.";
}
else {
	echo "No August, so at least not in the peak of heat.";
}

echo "<br>";
echo "<br>";

$value1 = 1;
while ($value1 < 10)
{
	echo "abc ";
	$value1++;
}

echo "<br>";
echo "<br>";

$value2 = 1;
do
{
	echo "xyz ";
	$value2++;
}
while ($value2 < 10);

echo "<br>";
echo "<br>";

for ($i=1; $i<10; $i++)
{
	echo $i . " ";
}

echo "<br>";
echo "<br>";

echo "<ol>";
for ($i='A'; $i<'G'; $i++)
{
	echo "<li>Item $i</li><br>";
}
echo "</ol>";

echo "<br>";
echo "<br>";

for ($i=1; $i<=12; $i++){
	$result = $i ** 2;
	echo "$i^2 = $result <br>";
}

echo "<br>";
echo "<br>";

echo "<table border=\"1\">";

for ($row=1; $row<=7; $row++){
	echo "<tr>\n";

	for ($col=1; $col<=7; $col++){

		$result=$col * $row;

		echo "<td>$result</td>\n";
	}
	echo "</tr>";
}
echo "</table>";
?>