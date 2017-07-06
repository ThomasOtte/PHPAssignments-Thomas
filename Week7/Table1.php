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
                <h3>Company</h3>
            </div>
            <div class="row">
               <p>
                    <a href="CreateForm1.php" class="btn btn-success">Create</a>
               </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'Connect.php';
                   $pdo = Connect::connect();
                   $sql = 'SELECT * FROM company ORDER BY id ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['location'] . '</td>';
                            echo '<td>'. $row['address'] . '</td>';
                             echo '<td width=250>';
                                echo '<a class="btn btn-info" href="Read1.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="UpdateForm1.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="Delete1.php?id='.$row['id'].'">Delete</a>';
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