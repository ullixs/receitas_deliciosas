<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubra receitas deliciosas para cada ocasião. Receitas de pizza, lasanha e muito mais.">
    <meta name="keywords" content="receitas, comida, pizza, lasanha, culinária">
    <title>Receitas Deliciosas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Visual/visualinicial.css">

    <style>
    /* Estilos CSS personalizados aqui */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Adicionado para evitar a barra de rolagem horizontal */
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0; /* Removido o espaçamento interno */
    }

    nav li {
        display: inline;
        margin-right: 10px; /* Reduzi a margem direita */
    }

    .navbar-brand img {
        max-width: 100%; /* Garante que o logo não ultrapasse a largura da barra */
        height: auto;
    }

    .navbar {
        padding: 0; /* Removido o espaçamento interno da barra */
    }

    .navbar-toggler {
        padding: 10px; /* Adicionado espaço interno ao botão de alternância */
    }

    /* Adicionado estilo para o contêiner flexível */
    .login-register-container {
        display: flex;
        align-items: center;
    }

    .login-register-container button {
        margin-left: 10px; /* Adicionada margem entre os botões */
    }
</style>
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        
        <header>
            <nav class="navbar navbar-expand-lg" style="background-color: #33413d;" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="Imagens/RECEITAS DELICIOSAS.png" alt="Receitas Deliciosas" width="400"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Início</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="receitas.php">Receitas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="sobrenos.php">Sobre nós</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="usuario.php">Usuário</a>
                      </li>
                        </a>
                        <li class="nav-item">
                        <a class="nav-link" href="sobrenos.php">Contate-nos</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                    <nav class="navbar" style="background-color:#33413d;">
    <div class="container-fluid justify-content-start">

    </div>
</nav>
    </header>