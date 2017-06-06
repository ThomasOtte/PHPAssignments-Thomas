<?php  
$file = basename($_SERVER['PHP_SELF']);  
$lastedit = filemtime($file);   
echo "Last modified " . date("l, dS F, Y, h:ia", $lastedit);  
?> 