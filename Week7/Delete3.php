<?php
    require 'Connect.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {

        $id = $_POST['id'];

        $pdo = Connect::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM employee WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Connect::disconnect();
        header("Location: Table3.php");
         
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
                        <h3>Delete a Employee</h3>
                    </div>
                     
                    <form class="form-horizontal" action="Delete3.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $id;?>"/>
                      <p class="alert alert-error">Are you sure you want to delete this employee?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-danger">Yes</button>
                          <a class="btn btn-info" href="Table3.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div>
  </body>
</html>