<?php

namespace models;

class EstadoPedido
{
    static private $iniciarSolicitud = null;
    static private $enEspera = null;
    static private $pedidoEntregado = null;
    static private $consumiendo = null;
    static private $porPagar = null;
    static private $pagado = null;

    private $name;
    /**
     * __construct
     * implementacion del constructor
     * @param  string $name
     */
    private function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Estado inicial de un pedido
     *
     * @return Estados
     */
    static public function iniciarSolicitud()
    {
        if (!EstadoPedido::$iniciarSolicitud) {
            EstadoPedido::$iniciarSolicitud = new EstadoPedido("Iniciar Solicitud");
        }
        return EstadoPedido::$iniciarSolicitud;
    }

    /**
     * Estado cuando el pedido esta en espera
     *
     * @return Estados
     */
    static public function enEspera()
    {
        if (!EstadoPedido::$enEspera) {
            EstadoPedido::$enEspera = new EstadoPedido("En espera del pedido");
        }
        return EstadoPedido::$enEspera;
    }

    /**
     * Estado cuando el pedido fue entregado al cliente
     *
     * @return Estados
     */
    static public function pedidoEntregado()
    {
        if (!EstadoPedido::$pedidoEntregado) {
            EstadoPedido::$pedidoEntregado = new EstadoPedido("Pedido Entregado");
        }
        return EstadoPedido::$pedidoEntregado;
    }

    /**
     * Estado cuando el pedido esta siendo consumido por el cliente en el local
     *
     * @return Estados
     */
    static public function consumiendo()
    {
        if (!EstadoPedido::$consumiendo) {
            EstadoPedido::$consumiendo = new EstadoPedido("Consumiendo");
        }
        return EstadoPedido::$consumiendo;
    }

    /**
     * Estado cuando el cliente hizo el pedido pero aun no lo paga
     *
     * @return Estados
     */
    static public function porPagar()
    {
        if (!EstadoPedido::$porPagar) {
            EstadoPedido::$porPagar = new EstadoPedido("Por pagar");
        }
        return EstadoPedido::$porPagar;
    }

    /**
     * Estado cuando el cliente ya pago el pedido
     *
     * @return Estados
     */
    static public function pagado()
    {
        if (!EstadoPedido::$pagado) {
            EstadoPedido::$pagado = new EstadoPedido("Pagado");
        }
        return EstadoPedido::$pagado;
    }

    public function mostrar()
    {
        return json_encode($this->mostrar2());
    }

    public function mostrar2()
    {
        return $this->name;
    }
}
