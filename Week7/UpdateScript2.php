<?php
    require 'Connect.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: Table2.php");
    }
     
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
            $sql = "UPDATE supervisor set name = ?, email = ?, age =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$email,$age,$id));
            Connect::disconnect();
            header("Location: Table2.php");
        }
    } else {
        $pdo = Connect::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM supervisor where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['name'];
        $email = $data['email'];
        $age = $data['age'];
        Connect::disconnect();
    }
?>