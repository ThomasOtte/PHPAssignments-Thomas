<?php 
$xmlDoc = new DOMDocument();
$xmlDoc->load("books.xml");


$x = $xmlDoc->documentElement;
$books = $x->getElementsByTagName('*');
foreach ($books as $books) {
  		echo $books->nodeName . " = " . $books->nodeValue . "<br>";
}
 
$addbooks = $x->getElementsByTagName('title');

$node = $xmlDoc->createElement("read","NO");
foreach ($addbooks as $addbooks) {
$newnode = $addbooks->appendChild($node);
}

echo $xmlDoc->saveXML();
?>