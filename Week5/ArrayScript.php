<?php
var_dump($_REQUEST);
$name =  $_POST['name'];
echo "Hello " . $name["fname"] . " " . $name["lname"];