<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="visual.css">
    <title>Sua Receita</title>
</head>
<body>
    <?php include 'cabecalhoteste.php'; ?>

    <div class="container-fluid">
        <!-- Seção onde o nome da receita é exibido -->
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h1 class="recipe-title">Cheese Cake</h1>
            </div>
        </div>

        <!-- Vídeo do YouTube incorporado -->
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="video-container">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/jtnc_JX2eRs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Seção onde as receitas são incluídas -->
        <div class="row">
            <?php
            $receita4 = 'receita4.php';

            // Inclua o conteúdo da receita
            include $receita4;
            echo '<hr>'; // Adiciona uma linha horizontal entre as receitas
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>