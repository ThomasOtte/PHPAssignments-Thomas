<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
print_r($xml);

echo "</br></br>";

foreach($xml->children() as $books) {
	echo $books->author . ", ";
	echo $books->title . ", ";
	echo $books->genre . ", ";
	echo $books->price . "<br>";
	
	$books->addChild("Read","NO");
}

echo $xml->asXML();
?>