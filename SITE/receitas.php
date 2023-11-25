<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visualreceitas.css">
</head>

<body>

    <?php include 'cabecalho_receitas.php'; ?>

    <br>

    <div class="container-fluid">

        <!-- Seção onde as fotos e nomes das receitas são exibidos -->
        <div class="row justify-content-md-center">
            <?php
            // Exemplo com duas receitas, adicione conforme necessário
            $receitas = array(
                array('Lasanha de Miojo', 'imagens/lasanha.png', 'receitas/lasanha.php'),
                array('Peito de Frango com Molho', 'imagens/frango.png', 'receitas/frangomolho.php')
            );

            foreach ($receitas as $receita) {
                echo '<div class="col-md-4">';
                echo '<a href="' . $receita[2] . '" class="recipe-link">';
                echo '<img src="' . $receita[1] . '" alt="' . $receita[0] . '" class="recipe-image">';
                echo '<div class="recipe-name">' . $receita[0] . '</div>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

</body>

</html>
