<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema de Login :: Toolmmer</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login de Usuário</div>
                <div class="card-body">
                    <form method="post" action="autenticado.php">
                        <div class="form-group">
                            <label for="user">Usuário:</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Senha:</label>
                            <input type="password" class="form-control" id="pass" name="pass" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Inicia a sessão
session_start();

// Verifica se o método é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (!empty($user) && !empty($pass)) {
        // Conecta com o banco de dados usando PDO
        $dsn = "mysql:host=localhost;dbname=receitasdeliciosas";
        $username = "root";
        $password = "";
        $pdo = new PDO($dsn, $username, $password);

        // Prepara a consulta SQL para verificar os dados do usuário
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $stmt = $pdo->prepare($sql);

        // Executa a consulta com o valor do usuário
        $stmt->execute(['email' => $user]);

        // Verifica se a consulta retornou algum resultado
        if ($stmt->rowCount() == 1) {
            // Obtém os dados do usuário em um array associativo
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica a senha usando password_verify
            if (password_verify($pass, $userData['senha'])) {
                // Armazena os dados do usuário na sessão
                $_SESSION['user'] = $userData;

                // Redireciona o usuário para a página restrita
                header("Location: restrita.php");
            } else {
                // Redireciona o usuário para a página de login com uma mensagem de erro
                header("Location: login.php?erro=1");
            }
        } else {
            // Redireciona o usuário para a página de login com uma mensagem de erro
            header("Location: login.php?erro=1");
        }
    } else {
        // Redireciona o usuário para a página de login com uma mensagem de erro
        header("Location: login.php?erro=2");
    }
}
?>

