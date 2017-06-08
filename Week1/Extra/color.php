<?php  
$text = "word"; 
$char = substr($text, 0, 1);
$text = preg_replace('/.{1}/','<span style="color:orange;">'.$char.'</span>',$text, 1);  
var_dump($text);
echo $text;  
?>  