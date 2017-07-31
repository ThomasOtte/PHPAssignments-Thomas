<?php
     
    require 'Connect.php';
 
    session_start();
    $id = $_SESSION["proid"];
    
    $pdo = Connect::connect();
    $sql = "SELECT * FROM project WHERE id = '$id'";
    
    $rows = $pdo->prepare($sql);
    $rows->execute();
    $row = $rows->fetch();
    $proid = $row['id'];
    $proname = $row['name'];
    
    Connect::disconnect();
    
    if ( !empty($_POST)) {

        $nameError = null;
        $emailError = null;
        $ageError = null;
         

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
         

        $valid = true;
        if (empty($name)) {
            $valid = false;
        }
         
        if (empty($email)) {
            $valid = false;
        } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $valid = false;
        }
         
        if (empty($age)) {
            $valid = false;
        }
        
        if (!is_numeric($age)) {
        	$valid = false;
        }

        if ($valid) {
            $pdo = Connect::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO employee (proid,name,proname,email,age) values(?, ?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($proid,$name,$proname,$email,$age));
            Connect::disconnect();
            header("Location: Table3.php");
        }
    }
?>