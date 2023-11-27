<?php
    function getconnection(){
    $dns = 'mysql:host=192.168.8.6;dbname=receitasdeliciosas'
    $username = 'receitasdeliciosas';
    $password = 'amd123';
 try{
    $pdo = new PDO($dns, $username, $password);
    return $pdo;
    echo 'conexao sucesso'
 }catch (PDOExpection $e){
    echo 'erro de conexão: ' . $e->getmessage();
 }

 ?>