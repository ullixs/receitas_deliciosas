<?php 
 class usuario{
    public $nome;
    public $email;
    public $senha;
    public $dadadenascimento;

public function index(){
   include "nome.php";
   include "email.php";
   include "senha.php";
   include "datadenascimento.php"
}
 }
?>