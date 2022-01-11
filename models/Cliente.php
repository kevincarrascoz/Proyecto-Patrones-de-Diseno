<?php

namespace models;

require_once "Cliente.php";
require_once "EstadoPedido.php";

use models\Cliente;
use models\EstadoPedido;

class Cliente{
    private $nombre;
    private $run;
    private $direccion;
    private $telefono;

    public function __construct() 
    {
    }
   
    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }
    public function setRun($run) {
        $this->run = $run;
        return $this;
    }
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
        return $this;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
        return $this;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getRun() {
        return $this->run;
    }
    public function getDireccion() {
        return $this->direccion;
    }
    public function getTelefono() {
        return $this->telefono;
    }








    public function mostrar2() {
        $funcionAux = function($t) {
            return $t->mostrar2();
        };
        return array(
            'Nombre'=>$this->getNombre(),
            'Rut'=>$this->getRun(),
            'Correo'=>$this->getDireccion(),
            'Telefono'=>$this->getTelefono()
        );
    }

    public function mostrar(){
        return json_encode($this->mostrar2(),JSON_PRETTY_PRINT);
    }
}