<?php

namespace models;

require_once 'Pagar.php';

class Pagar {
    public $moneda;    

    public function __construct($monto, $moneda){
       $this->monto = $monto;
        $this->moneda = $moneda;
    }
    
    public function getMoneda(){
        return $this->moneda;
    }
    public function getMonto(){
        return $this->monto;
    }

    public function mostrar(){
        return json_encode(array(
            'Monto'=>$this->getMonto(),
            'Moneda'=>$this->getMoneda()
        ) ,JSON_PRETTY_PRINT);
    }

}