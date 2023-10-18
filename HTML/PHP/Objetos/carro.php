<?php

class Carro{
    public $marca;
    public $cor;
    public $modelo;
    public $fabricação;
    public $cambio;
    public $motor; 
    public $combustível;
    public $roda;
    public $statusOn;

public function ligar(){

        if($this->statusOn==0){
            $this->statusOn=1;
            echo "Ligando...";
        } else {
        echo  "O carro";
        echo $carro1->marca = "<br>";
        echo "já está ligado";
        }

}
}