<?php
    require 'Connect.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: Table1.php");
    }
     
    if ( !empty($_POST)) {

        $nameError = null;
        $locationError = null;
        $addressError = null;
         

        $name = $_POST['name'];
        $location = $_POST['location'];
        $address = $_POST['address'];
         

        $valid = true;
        if (empty($name)) {
            $nameError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($location)) {
            $locationError = 'Please enter Location';
            $valid = false;
        } 
        
        if (empty($address)) {
            $addressError = 'Please enter Address';
            $valid = false;
        }
         
        if ($valid) {
            $pdo = Connect::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE company  set name = ?, location = ?, address =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$location,$address,$id));
            Connect::disconnect();
            header("Location: Table1.php");
        }
    } else {
        $pdo = Connect::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM company where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['name'];
        $location = $data['location'];
        $address = $data['address'];
        Connect::disconnect();
    }
?>