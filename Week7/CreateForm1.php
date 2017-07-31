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
                        <h3>Add a Company</h3>
                    </div>
             
                    <form class="form-horizontal" action="CreateScript1.php" method="post">
                      <div class="control-group">
                        <label class="control-label">Company Name</label>
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
                          <button type="submit" class="btn btn-success">Add</button>
                          <a class="btn" href="Table1.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div>
  </body>
</html>