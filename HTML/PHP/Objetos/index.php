<?php

    require "carro.php";

    $carro1 = new Carro();
    $carro1->marca = "nissan";
    $carro1->modelo = "GTR-r34";
    $carro1->motor = "v6";
    $carro1->statusOn = 0;
    $carro1->cor = "azul";

    echo $carro1->marca = "<br>";

    $carro1->ligar();