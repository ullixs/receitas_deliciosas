<?php

    include "lib.php"

    function mensagem($msg){
        echo $msg." "; 
        .$nome"<br><hr>";
    }

    
    //calculo desconto

    function calcdesconto($valor,$desconto){
        $totaldesconto = $valor*$desconto;
        return $totaldesconto;
    }

    function calcvalorfinal($valor,$totaldesonto){
        $total = $valor - $totaldesconto;
        mensagen($total,"Total do produto")

    }

    calcvalorfinal(100,calcdesconto(100,0.10))

?>