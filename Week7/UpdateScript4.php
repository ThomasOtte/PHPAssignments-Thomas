<?php
    require 'Connect.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: Table4.php");
    }
     
    if ( !empty($_POST)) {

        $nameError = null;
         
        $name = $_POST['name'];         

        $valid = true;
     if (empty($name)) {
            $valid = false;
        }
         
        if ($valid) {
            $pdo = Connect::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE project set name = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name, $id));
            $sql2 = "UPDATE employee set proname = ? WHERE proid = ?";
            $q2 = $pdo->prepare($sql2);
            $q2->execute(array($name, $id));
            Connect::disconnect();
            header("Location: Table4.php");
        }
    } else {
        $pdo = Connect::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM project where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $name = $data['name'];
        Connect::disconnect();
    }
?>