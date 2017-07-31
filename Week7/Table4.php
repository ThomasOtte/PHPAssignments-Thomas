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
                <h3>Project</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Project Name</th>
                      <th>Employee Name</th>
                      <th>Startdate</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'Connect.php';
                   $pdo = Connect::connect();
                   $sql = 'SELECT * FROM project ORDER BY id ASC';
                        
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['empname'] . '</td>';
                            echo '<td>'. $row['startdate'] . '</td>';
                             echo '<td width=250>';
                                echo '<a class="btn btn-info" href="Read4.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning" href="UpdateForm4.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="Delete4.php?id='.$row['id'].'">Delete</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="CreateForm5.php?id='.$row['id'].'">Add Employee</a>';
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