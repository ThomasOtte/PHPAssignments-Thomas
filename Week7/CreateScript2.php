<?php
     
    require 'Connect.php';
 
    session_start();
    $id = $_SESSION["compid"];
    
    $pdo = Connect::connect();
    $sql = "SELECT * FROM company WHERE id = '$id'";
    
    $rows = $pdo->prepare($sql);
    $rows->execute();
    $row = $rows->fetch();
    $compid = $row['id'];
    $compname = $row['name'];
    
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
            $sql = "INSERT INTO supervisor (compid,name,compname,email,age) values(?, ?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            try {
            $q->execute(array($compid,$name,$compname,$email,$age));
            } catch (PDOException $e) {
            	if ($e->getCode() == '1062')
            		Connect::disconnect();
            		$_SESSION["dupe"] = "This company already has a supervisor";
            		die(header("Location: Table1.php"));
            }
            Connect::disconnect();
            header("Location: Table2.php");
        }
    }
?>