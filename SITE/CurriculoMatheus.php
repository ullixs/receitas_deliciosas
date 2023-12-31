<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: ./Login/login.php');
    exit;
}


?>

<!DOCTYPE html>

<html lang="pt-br">

<!--HEAD-->
<head> 
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Currículo</title>
</head>
<!--TITULO-->
    <b><h2>Matheus de Jesus Rocha</h2></b><hr> <br>


<!--CONTATO-->
    <address>
        <u><b><h2>Contato</h2></b></u>
        Telefone: <br>
        11 996562837 <br>
        Email: <br>
        mattheusrocha28@gmail.com <br>
        Endereço: <br>
        Nº 18, Travessa Somália - Serraria, Diadema - SP
    </address> <br>


<!--OBJETIVO-->
    <u><b><h2>Objetivo</h2></b></u>

    <p>Estágio na área de informática.</p> <br>


<!--QUALIFICAÇÕES-->    
    <u><b><h2>Qualificações</h2></b></u>

    <p>
       <ul>
           <li>Aplicativos: <br>
           Word, Excel, Powerpoint</li> <br>
           <li>Windows Intermediário</li> <br>
           <li>Git</li> <br>
           <li>Git Hub</li> <br>
           <li>Suporte ao Usuário</li> <br>
           <li>Linguagem C</li> <br>
           <li>HTML</li> <br>
           <li>CSS</li> <br>
           <li>Designer Gráfico</li>
       </ul>
    </p> <br>


<!--CURSANDO-->    
    <u><b><h2>Cursando</h2></b></u>

    <p> 
        Informática – Noturno <br>
        Etec Juscelino Kubitschek <br>
        2° Semestre <br>
        Previsão de conclusão: <br>
        1° Semestre de 2024 <br>
    </p> <br>


<!--FORMAÇÃO ACADÊMICA-->    
    <u><b><h2>Formação Acadêmica</h2></b></u>

    <p>2022 Ensino Médio completo – E. E. Professor José Fernando Abbud
    </p> <br>


<!--IDIOMAS-->
    <u><b><h2>Idiomas</h2></b></u>

    <p>Inglês – Intermediário</p> <br>



    <li><a href="javascript: history.go(-1)">Voltar para o sobre nós</a></li>

<!--FIM-->
</body>

</html>
