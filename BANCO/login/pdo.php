<?php 
$dsn = "mysql:host=localhost;dbname=receitasdeliciosas";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

//tem que conectar com o banco de dados , entao tem que ter um banco de dados criado pelo cmd , mysql workban ,
// usuario do banco e a senha de acordo que esta na maquina

//   insert into usuario (id_usuario, nome, email) values (1,"ullian","ulli@gmail.com");
//comando utilizado para inserir informaçoes no banco

$stmt = $pdo->query("SELECT * FROM usuario");
while ($usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $usuario['nome'] . " - " . $usuario['email'] . "<br>";
}
?>