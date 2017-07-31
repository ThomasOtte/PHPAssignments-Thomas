<?php 
session_start();
if (isset($_SESSION["dupe"]))
{
	echo $_SESSION["dupe"];
	$_SESSION["dupe"] = "";
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
            <div class="row">
                <h3>Supervisor</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Company Name</th>
                      <th>E-mail</th>
                      <th>Age</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'Connect.php';
                   $pdo = Connect::connect();
                   $sql = 'SELECT * FROM supervisor ORDER BY id ASC';
                       
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['compname'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['age'] . '</td>';
                             echo '<td width=250>';
                                echo '<a class="btn btn-info" href="Read2.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning" href="UpdateForm2.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="Delete2.php?id='.$row['id'].'">Delete</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="CreateForm3.php?id='.$row['id'].'">Add Employee</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Connect::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div>
  </body>
</html>