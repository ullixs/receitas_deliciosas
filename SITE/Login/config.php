<?php
    function getconnection(){
    $dns = 'mysql:host=localhost;dbname=receitasdeliciosas'
    $username = 'receitasdeliciosas';
    $password = 'amd123';
 try{
    $pdo = new PDO($dns, $username, $password);
    return $pdo;

 }catch (PDOExpection $e){
    echo 'erro de conexão: ' . $e->getmessage();
 }

 ?>