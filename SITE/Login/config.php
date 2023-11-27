<?php
    function getconnection(){
    $dbHost = 'Localhost';
    $dbUsername = 'receitasdeliciosas';
    $dbPassword = 'amd123';
 
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

 if($conexao->connect_errno)
 {
     echo "Erro";
 }
 else
 {
     echo "Conexão efetuada com sucesso";
 }
?>