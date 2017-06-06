<!DOCTYPE html>  
<html>  
<head>  
   <title></title>  
   <meta charset=UTF-8>  
   </head>  
   <body>  
 <div>
   <form method='POST'>  
   <h1>Please input your name:</h1>  
 <input type="text" name="name">  
 <input type="submit" value="submit">  
 </form>  
<?php  

if (!empty($_POST['name']))
{
$name = $_POST['name'];  
echo "<h3> Hello $name </h3>";  
}
?>  
</div>
</body>  
</html>  