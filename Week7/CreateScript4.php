<?php
     
    require 'Connect.php';
 
    session_start();
    $id = $_SESSION["empid"];
    
    $pdo = Connect::connect();
    $sql = "SELECT * FROM employee WHERE id = '$id'";
    
    $rows = $pdo->prepare($sql);
    $rows->execute();
    $row = $rows->fetch();
    $empid = $row['id'];
    $empname = $row['name'];
    
    Connect::disconnect();
    
    if ( !empty($_POST)) {

        $name = $_POST['name'];
        $startdate = date("Y-m-d");


        $valid = true;
        if (empty($name)) {
            $valid = false;
        }

        if ($valid) {
            $pdo = Connect::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO project (empid,name,empname,startdate) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($empid,$name,$empname,$startdate));
            Connect::disconnect();
            header("Location: Table4.php");
        }
    }
?>