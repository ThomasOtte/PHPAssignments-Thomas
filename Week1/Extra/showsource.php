<?php  
$url = file('http://www.google.com/');  
foreach ($url as $source => $sourceline)  
 {  
    echo "Line No.-{$source}: " . htmlspecialchars($sourceline) . "<br>";  
 }  
?>  