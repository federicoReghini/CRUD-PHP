<?php

require('connect.php');

$sql = "INSERT INTO utenti(nome, cognome, email, pswd) VALUES(:nome,:cognome,:email,:pswd)";

$query = $db->prepare($sql);



$query->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
$query->bindParam(':cognome', $_POST['cognome'], PDO::PARAM_STR);
$query->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
$query->bindParam(':pswd', $_POST['pswd'], PDO::PARAM_STR);

if($query->execute()){
    // echo 'utente inserito';
    header('location:display.php');
}else {
    //print_r($query->errorInfo());
}