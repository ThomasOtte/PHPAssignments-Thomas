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
                <h3>Employee</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Supervisor's Name</th>
                      <th>Project Name</th>
                      <th>E-mail</th>
                      <th>Age</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'Connect.php';
                   $pdo = Connect::connect();                   
                   $sql = 'SELECT * FROM employee GROUP BY proid ASC';
                   
                   $enablejson = false; // set to true to enable json encodeing
                   if ($enablejson == true)
                   {
                   foreach ($pdo->query($sql) as $row) 
                   {
                   echo json_encode($row). "</br>";
                   echo json_encode($row,JSON_FORCE_OBJECT). "</br>";
                   echo json_encode($row,JSON_PRETTY_PRINT). "</br>";
                   echo json_encode($row,JSON_UNESCAPED_SLASHES). "</br>";
                   
                   echo "</br></br>";
                   
                   class RowValue implements JsonSerializable {
                   	public function __construct(array $row) {
                   		$this->array = $row;
                   	}
                   
                   	public function jsonSerialize() {
                   		return $this->array;
                   	}
                   }
                   echo json_encode(new RowValue($row), JSON_PRETTY_PRINT);
                   }
                   
                   echo "</br></br>";
                   
                   $encoded = json_encode($row);
                   var_dump(json_decode($encoded, true));
                   var_dump(json_decode($encoded, false));
                   }
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['supname'] . '</td>';
                            echo '<td>'. $row['proname'] . '</td>';
                            echo '<td>'. $row['email'] . '</td>';
                            echo '<td>'. $row['age'] . '</td>';
                             echo '<td width=250>';
                                echo '<a class="btn btn-info" href="Read3.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-warning" href="UpdateForm3.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="Delete3.php?id='.$row['id'].'">Delete</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="CreateForm4.php?id='.$row['id'].'">Add Project</a>';
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