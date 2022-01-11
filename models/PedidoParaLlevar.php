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

class PedidoParaLlevar implements TipoPedido
{

    public $fecha;
    public $estado;
    public $ordenes;
    public $valorPedido;

    /**
     *
     * @param ComponenteGraficoIngredientes $componente            
     */
    public function __construct($fecha, $estado, $orden, $valorPedido)
    {
        $this->fecha = $fecha;
        $this->estado = $estado;
        $this->ordenes = array();
        $this->valorPedido = $valorPedido;
    }


    public function calcularValorPedido($valor)
    {
        $this->valorPedido = $valor;
        return $this;
    }

    public function estadoPedido()
    {
        $this->estado = EstadoPedido::porPagar();
        return $this;
    }

    public function pagarPedido($valorPedido)
    {
        $pago = new Pagar($valorPedido, 'CLP');
        $this->estado = EstadoPedido::porPagar();
    }

    public function mostrar2()
    {
        $funcionAux = function ($t) {
            return $t->mostrar2();
        };
        return array(
            'Fecha Pedido' => $this->fecha,
            'estado' => $this->estado,
            'Pedido Seleccionado del menu' => array_map($funcionAux, $this->ordenes)
        );
    }

    public function mostrar()
    {
        return json_encode($this->mostrar2(), JSON_PRETTY_PRINT);
    }
}
