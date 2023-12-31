<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
  header('Location: ./Login/login.php');
 exit;
}


?>

<?php include 'cabecalho_sobrenos.php'; ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visualsobrenos.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .section {
            margin-bottom: 30px;
        }

        .team-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Adicione mais estilos conforme necessário */

    </style>
    <title>Receitas Deliciosas - Sobre Nós</title>
</head>

<body>

    <div class="content">
        <h1>Receitas Deliciosas</h1>
<br><br>
        <div class="section">
            <h2>Objetivo do Projeto</h2>
            <p>Explore novas receitas, aprimore suas habilidades na cozinha e compartilhe suas próprias criações.
                Os usuários podem criar perfis, adicionar receitas e interagir com outras pessoas por meio de comentários.
            </p>
        </div>
<br>
        <div class="section">
            <h2>Público Alvo</h2>
            <p>Destinado a pessoas interessadas em aprender a cozinhar, incluindo estudantes, jovens adultos que moram
                sozinhos, pais e qualquer um que queira experimentar receitas caseiras.
            </p>
        </div>
<br>
        <div class="section">
            <h2>Conheça a Equipe</h2>
            <div class="team-buttons">
                <button onclick="window.location.href='curriculoullian.php'" class="btn">Ullian dos Santos</button>
                <button onclick="window.location.href='CurriculoMatheus.php'" class="btn">Matheus Rocha</button>
            </div>
        </div>
<br>
        <div class="section">
            <h2>Entre em Contato</h2>
            <p>Estamos sempre abertos para receber suas perguntas, sugestões e feedback. Entre em contato conosco pelo e-mail:</p>
            <p>Email: <a href="mailto:receitasdeliciosas@gmail.com">receitasdeliciosas@gmail.com</a></p>
        </div>

    </div>

    <?php include 'footer.php'; ?>

</body>

</html>


