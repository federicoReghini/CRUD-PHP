<?php
require('connect.php');

if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    $sql = "DELETE from utenti WHERE id=$id";

    $query = $db->prepare($sql);
    
    if($query->execute()){
        // echo 'utente eliminato';
        header('location:../display.php');
    }else {
        print_r($query->errorInfo());
    }
}

