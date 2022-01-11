<?php

namespace models;

require_once "EstadoPedido.php";

use models\EstadoPedido;

class Cliente
{
    private $nombre;
    private $run;
    private $direccion;
    private $telefono;
    private $pedidos;

    public function __construct()
    {
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function setRun($run)
    {
        $this->run = $run;
        return $this;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getRun()
    {
        return $this->run;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * solicitar
     * 
     * Solicita un pedido desde este cliente para consumir en el local
     * @param array $orden
     * @return Pedido
     */
    public function solicitarLocal($orden)
    {
        $pedido = new PedidoLocal(strtotime("now"), EstadoPedido::iniciarSolicitud(), $orden, $valorPedido);
        array_push($this->pedidos, $pedido);
        return $pedido;
    }

    /**
     * solicitar
     * 
     * Solicita un pedido desde este cliente para llevar
     * @param array $orden
     * @return Pedido
     */
    public function solicitarLlevar($orden)
    {
        $pedido = new PedidoParaLlevar(strtotime("now"), EstadoPedido::iniciarSolicitud(), $orden, $valorPedido);
        array_push($this->pedidos, $pedido);
        return $pedido;
    }



    public function mostrar2()
    {
        $funcionAux = function ($t) {
            return $t->mostrar2();
        };
        return array(
            'Nombre' => $this->getNombre(),
            'Rut' => $this->getRun(),
            'Correo' => $this->getDireccion(),
            'Telefono' => $this->getTelefono()
        );
    }

    public function mostrar()
    {
        return json_encode($this->mostrar2(), JSON_PRETTY_PRINT);
    }
}
