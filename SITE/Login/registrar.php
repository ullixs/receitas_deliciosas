<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro de Usuário</div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="user">Usuário:</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Senha:</label>
                            <input type="password" class="form-control" id="pass" name="pass" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                if (!empty($user) && !empty($pass)) {
                    // Conecta com o banco de dados usando PDO
                    $dsn = "mysql:host=localhost;dbname=receitasdeliciosas";
                    $username = "root";
                    $password = "";
                    $pdo = new PDO($dsn, $username, $password);

                    // Prepara a consulta SQL para inserir os dados do usuário
                    $sql = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)";
                    $stmt = $pdo->prepare($sql);

                    // Executa a consulta com os valores do formulário
                    $stmt->execute(['email' => $user, 'senha' => $pass]);

                    echo '<div class="alert alert-success mt-3">Usuário registrado com sucesso!</div>';
                } else {
                    echo '<div class="alert alert-danger mt-3">Por favor, preencha todos os campos!</div>';
                }
            }
            ?>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
