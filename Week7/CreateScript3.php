<?php
     
    require 'Connect.php';
 
    session_start();
    $id = $_SESSION["supid"];
    
    $pdo = Connect::connect();
    $sql = "SELECT * FROM supervisor WHERE id = '$id'";
    
    $rows = $pdo->prepare($sql);
    $rows->execute();
    $row = $rows->fetch();
    $supid = $row['id'];
    $supname = $row['name'];
    
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
            $sql = "INSERT INTO employee (supid,name,supname,email,age) values(?, ?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($supid,$name,$supname,$email,$age));
            Connect::disconnect();
            header("Location: Table3.php");
        }
    }
?>