<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Registro :: Toolmmer</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (!empty($user) && !empty($pass)) {
        // Abre o arquivo CSV para escrita
        $csvFile = fopen('usuarios.csv', 'a');

        // Escreve o novo registro no arquivo CSV
        fputcsv($csvFile, [$user, $pass]);

        // Fecha o arquivo CSV
        fclose($csvFile);

        echo "Usuário registrado com sucesso!";
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>

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
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


