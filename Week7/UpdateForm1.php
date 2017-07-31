<?php 
//require 'database.php';
$id = 0;
 
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
}
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
                        <h3>Update a Company</h3>
                    </div>
             
                    <form class="form-horizontal" action="UpdateScript1.php?id=<?php echo $id?>" method="post">
                      <div class="control-group">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Location</label>
                        <div class="controls">
                            <input name="location" type="text" placeholder="Location">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <input name="address" type="text"  placeholder="Address">
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="Table1.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> 
  </body>
</html>