<?php

namespace models;

class EstadoPedido {
    static private $iniciarSolicitud = null;
    static private $enEspera = null;
    static private $pedidoEntregado = null;
    static private $consumiendo = null;
    static private $porPagar = null;
    static private $pagado = null;

    private $name;
    
    private function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    static public function iniciarSolicitud() {
        if (!EstadoPedido::$iniciarSolicitud) {
            EstadoPedido::$iniciarSolicitud = new EstadoPedido("Iniciar Solicitud");
        }
        return EstadoPedido::$iniciarSolicitud;
    }

    static public function enEspera() {
        if (!EstadoPedido::$enEspera) {
            EstadoPedido::$enEspera = new EstadoPedido("En espera del pedido");
        }
        return EstadoPedido::$enEspera;
    }

    static public function pedidoEntregado() {
        if (!EstadoPedido::$pedidoEntregado) {
            EstadoPedido::$pedidoEntregado = new EstadoPedido("Pedido Entregado");
        }
        return EstadoPedido::$pedidoEntregado;
    }

    static public function consumiendo() {
        if (!EstadoPedido::$consumiendo) {
            EstadoPedido::$consumiendo = new EstadoPedido("Consumiendo");
        }
        return EstadoPedido::$consumiendo;
    }

    static public function porPagar() {
        if (!EstadoPedido::$porPagar) {
            EstadoPedido::$porPagar = new EstadoPedido("Por pagar");
        }
        return EstadoPedido::$porPagar;
    }

    static public function pagado() {
        if (!EstadoPedido::$pagado) {
            EstadoPedido::$pagado = new EstadoPedido("Pagado");
        }
        return EstadoPedido::$pagado;
    }

    public function mostrar() {
        return json_encode($this->mostrar2());
    }

    public function mostrar2() {
        return $this->name;
    }
}