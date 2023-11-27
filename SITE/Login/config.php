<?php
$dsn = "mysql:host=localhost;dbname=receitasdeliciosas";
$username = "receitasdeliciosas";
$password = "amd123";
$pdo = new PDO($dsn, $username, $password);
    
    $conexao = new mysqli($dsn,$username,$password,$dbName);

 if($conexao->connect_errno)
 {
     echo "Erro";
 }
 else
 {
     echo "Conexão efetuada com sucesso";
 }
?>