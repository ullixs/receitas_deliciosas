<?php
class layout {
    public $cabecalho;
    public $conteudo;
    public $rodape;

    public function index($conteudo){
        include "cabecalho.php";
        include "conteudo.php";
        include "rodape.php";
        include $menu.".php";
    }

}
?>

<?php
require_once "layout.php";
$pagina = new layout();
$pagina->index("formulario_login");

?>