<?php
     
    require 'Connect.php';
 
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
            $sql = "INSERT INTO company (name,location,address) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$location,$address));
            Connect::disconnect();
            header("Location: Table1.php");
        }
    }
?>