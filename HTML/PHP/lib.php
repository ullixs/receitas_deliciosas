<?php
function index($conteudo){
    include "cabeçaclho.php"
    if($menu==""){
    } else {
    include $menu;
    }
    include $conteudo;
    include "cabeçaclho.php"
}
function painel(){
    include "cabeçaclho.php"
    include $conteudo;
    include "cabeçaclho.php"
}