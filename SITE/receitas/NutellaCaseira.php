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
  
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <h1 class="recipe-title">Nutella Caseira</h1>
            </div>
        </div>

   
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="video-container">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/eQub1iEkznA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

 
        <div class="row">
            <?php
            $receita5 = 'receita5.php';

           
            include $receita5;
            echo '<hr>'; 
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
