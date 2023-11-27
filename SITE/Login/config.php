<?php
    function getconnection(){
    $dns = 'mysql:host=localhost;dbname=receitasdeliciosas'
    $username = 'receitasdeliciosas';
    $password = 'amd123';
 
    $pdo = new PDO($dns, $username, $password);
 
?>