<?php 
$id = null;
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}
 
if ( null==$id ) {
	header("Location: Table1.php");
}
session_start();
$_SESSION["compid"] = $id;

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
                        <h3>Add a Supervisor</h3>
                    </div>
             
                    <form class="form-horizontal" action="CreateScript2.php" method="post">
                      <div class="control-group">
                        <label class="control-label">Supervisor Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">E-mail</label>
                        <div class="controls">
                            <input name="email" type="text" placeholder="E-Mail">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Age</label>
                        <div class="controls">
                            <input name="age" type="text"  placeholder="Age">
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Add</button>
                          <a class="btn" href="Table1.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div>
  </body>
</html>