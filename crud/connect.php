<?php

try{
    $hostname = 'localhost';
    $dbname = 'utenti';
    $user = 'root';
    $pass = '';

    $db = new PDO("mysql:host=$hostname; dbname=$dbname", $user, $pass);

    // echo 'db connesso<br>';

}catch (PDOException $e){
    echo ' errore'. $e->getMessage();
    die();
}