<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .container {
            position: center;
            margin-top: 50px;
        }
        .box{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            width: 80%;
            max-width: 400px; /* Defina a largura máxima para evitar que ocupe toda a largura da tela */
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;
            margin-bottom: 20px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            width: 100%;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
        }
        .backButton {
            background-color: #555;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 20px;
        }
        .backButton:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Login</h1>
            <form action="testLogin.php" method="POST">
                <input type="text" name="email" placeholder="Email">
                <br><br>
                <input type="password" name="senha" placeholder="Senha">
                <br><br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
            <button class="backButton" onclick="window.location.href='../index.php'">voltar para o Inicio</button>
        </div>
    </div>
</body>
</html>
