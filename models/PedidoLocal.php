<?php

namespace models;

require_once "Pagar.php";
require_once "Cliente.php";
require_once "Pedido.php";
require_once "EstadoPedido.php";
require_once "TipoPedido.php";

use models\Pedido;
use models\Pagar;
use models\Cliente;
use models\EstadoPedido;
use models\TipoPedido;

class PedidoLocal implements TipoPedido{

    public $fecha;
    public $estado;
    public $ordenes;
    public $numeroDeMesa;
    public $valorPedido;

    public function __construct($fecha, $estado, $orden, $valorPedido) 
    {
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->ordenes = array();
        $this->valorPedido = $valorPedido;
    }

    public function calcularValorPedido($valor) {
        $this->valorPedido = $valor;
        return $this;
    }
    public function setNumeroDeMesa($numeroDeMesa){
        $this->numeroDeMesa = $numeroDeMesa;
        return $this;
    }
    public function getNumeroDeMesa(){
        return  $this->numeroDeMesa;

    }

    public function estadoConsumiendo(){
        $this->estado = EstadoPedido::consumiendo();

    }

    public function pagarPedido(){
        $pago = new Pago($valorPedido, 'CLP');
        $this->estado = EstadoPedido::enEspera();
    }

    public function mostrar2() {
        $funcionAux = function($t) {
            return $t->mostrar2();
        };
        return array(
            'Fecha Pedido'=>$this->fecha,
            'Numer de mesa'=>$this->numeroDeMesa,
            'estado'=>$this->estado,
            'Correo'=>$this->getCorreo(),
            'Pedido Seleccionado del menu'=> array_map($funcionAux, $this->ordenes)
        );
    }

    public function mostrar(){
        return json_encode($this->mostrar2(),JSON_PRETTY_PRINT);
    }

    
}