<?php
var_dump($_REQUEST);
$fname = htmlspecialchars($_POST['fname']);
$lname = $_POST['lname'];
echo "Hello " . $fname . " " . $lname . "<br>"; 
 
var_dump(filter_var($fname,FILTER_VALIDATE_INT));
var_dump(filter_var($fname,FILTER_SANITIZE_NUMBER_INT));

function trimPost($fname)
{
	return trim($fname);
}

$fnamefilter = filter_input(INPUT_POST, 'fnamefilter', FILTER_CALLBACK, array('options' => 'trimPost'));
var_dump($fnamefilter);
?>
<a href="http://assignments.local/Week5/PostScript.php?redi=<?php echo urlencode($fname);?>">Redirect</a>