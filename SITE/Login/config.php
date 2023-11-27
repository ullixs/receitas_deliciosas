<?php
    function getconnection(){
    $dbHost = 'Localhost';
    $dbUsername = 'receitasdeliciosas';
    $dbPassword = 'amd123';
 
    

 if($conexao->connect_errno)
 {
     echo "Erro";
 }
 else
 {
     echo "Conexão efetuada com sucesso";
 }
}
?>