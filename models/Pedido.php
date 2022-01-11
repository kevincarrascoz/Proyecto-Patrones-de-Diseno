<?php

namespace models;

abstract class Pedido
{
    private int $id;
    private $estadoPedido;
    private $datosPedido = array();
    private $valorPedido;


    public function __construct($id, $datosPedido, $valorPedido)
    {
        $this->id = $id;
        $this->datosPedido = $datosPedido;
        $this->valorPedido = $valorPedido;
    }

    public function calcularValorPedido($valor)
    {
        $this->valorPedido = $valor;
        return $this;
    }


    protected abstract function mostrar2();

    protected abstract function mostrar();
}
