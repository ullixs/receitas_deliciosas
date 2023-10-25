<?php
class Receita {
    public $duracao;
    public $titulo;
    public $modo_de_preparo; 
    public $data_publicação;

    public function index(){
        include "duração.php";
        include "titulo.php";
        include "modo_de_preparo.php";
        include "data_publicação.php";
    }

}
?>