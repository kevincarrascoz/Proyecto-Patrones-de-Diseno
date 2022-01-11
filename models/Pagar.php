<?php

namespace models;

require_once 'Pagar.php';
require_once "EstadoPedido.php";

use models\EstadoPedido;

class Pagar {
    public $moneda;   
    public $estado; 

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
    public function Pagar(){
        $estado = EstadoPedido::pagado();
    }

    public function mostrar(){
        return json_encode(array(
            'Monto'=>$this->getMonto(),
            'Moneda'=>$this->getMoneda(),
            'Estado del pedido'=>$this->estado,
        ) ,JSON_PRETTY_PRINT);
    }

}