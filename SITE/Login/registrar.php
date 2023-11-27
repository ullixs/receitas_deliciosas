
<php?
include 'sdadsa'


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .container {
            position: center;
            margin-top: 50px;
        }

        .box {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
      
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;
            margin-bottom: 20px;
        }

        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            width: 100%;
            cursor: pointer;
        }

        .inputSubmit:hover {
            background-color: deepskyblue;
        }

        .message {
            text-align: center;
            margin-top: 20px;
        }

        .alert {
            width: 100%;
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Registro de Usuário</h1>
            <form action="" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br>
                <input type="password" name="senha" placeholder="Senha">
                <br>
                <input class="inputSubmit" type="submit" name="submit" value="Registrar">
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user = $_POST['email']; // Corrigido para 'email'
                $pass = $_POST['senha']; // Corrigido para 'senha'

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

                    echo '<div class="alert alert-success message" id="success-message">Usuário registrado com sucesso!</div>';

                    // Adiciona script JavaScript para redirecionamento após 3 segundos
                    echo '<script>
                            setTimeout(function(){
                                window.location.href = "login.php";
                            }, 3000);
                          </script>';
                } else {
                    echo '<div class="alert alert-danger message">Por favor, preencha todos os campos!</div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
