<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
    // Verifica se o usuário está autenticado, por exemplo, usando uma lista de usuários registrados
    $usuarios = [
        'toolmmer' => 'a1b24d',
        'gabrielsooco' => 'b3gabriel'
    ];

    $user = $_SESSION['usuario'];
    $pass = $_SESSION['senha'];

    if (isset($usuarios[$user]) && $usuarios[$user] == $pass) {
        echo "Bem-vindo, $user!";
    } else {
        echo "Acesso não autorizado. Faça o login novamente.";
    }
} else {
    echo "Acesso não autorizado. Faça o login novamente.";
}
?>
