<?php 
$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}
 
if ( null==$id ) {
	header("Location: Table3.php");
}
session_start();
$_SESSION["empid"] = $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Add a Project</h3>
                    </div>
             
                    <form class="form-horizontal" action="CreateScript4.php" method="post">
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name">
                        </div>                        
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-success">Add</button>
                        <a class="btn" href="Table3.php">Back</a>
                      </div>
                    </form>
                </div>
                 
    </div>
  </body>
</html>