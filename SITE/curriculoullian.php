<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: ./Login/login.php');
    exit;
}


?>
?>
<!DOCTYPE html>
<html lang="pt-br">

<!-- HEAD -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ullian Dos Santos Silva</title>
</head>

<!-- BODY -->
<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 20px;">

    <!-- TÍTULO -->
    <h1>Ullian Dos Santos Silva</h1>

    <!-- CONTATO -->
    <address>
        <h2>Contato</h2>
        <p>
            R. Marquesa De Santos, 294 - Eldorado / Diadema – SP<br />
            (11) 94605-1279<br />
            ullian.silva299@gmail.com
        </p>
    </address>

    <!-- OBJETIVO -->
    <h2>Objetivo Profissional</h2>
    <p>
        Ingressar como Jovem Aprendiz, desenvolvendo habilidades e crescendo profissionalmente, confiante com dedicação e entusiasmo para o sucesso da empresa. Busco aprender, colaborar e crescer nessa oportunidade de primeiro emprego.
    </p>

    <!-- ESCOLARIDADE -->
    <h2>Escolaridade</h2>
    <p>
        Cursando Ensino Médio 3° Ano.<br />
        Instituição: Wallace C. Simonsen.<br />
        Previsão do término: 12/2024.<br />
        Turno: Manhã.
    </p>

    <p>
        Cursando Curso Técnico De Informática 2° MÓDULO.<br />
        Instituição: Etec Jucelino Klubitscheck de Oliveira.<br />
        Previsão do término: 06/2024.<br />
        Turno: Noturno.
    </p>

    <!-- EXPERIÊNCIA PROFISSIONAL -->
    <h2>Experiência Profissional</h2>
    <p>Em busca do primeiro emprego.</p>

    <!-- HABILIDADES -->
    <h2>Habilidades</h2>
    <ul>
        <li>Facilidade em aprender.</li>
        <li>Comunicativo.</li>
        <li>Facilidade em se adaptar com mudanças.</li>
        <li>Capacidade de solucionar problemas.</li>
        <li>Trabalho em equipe.</li>
    </ul>

    <!-- IDIOMAS -->
    <h2>Idiomas</h2>
    <p>Espanhol – Médio.</p>

    <!-- VOLTAR -->
    <li><a href="javascript: history.go(-1)">Voltar para o sobre nós</a></li>

    <!-- FIM DO BODY -->
    </body>
</html>
