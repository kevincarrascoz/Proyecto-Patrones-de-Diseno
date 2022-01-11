<?php
namespace models;

require_once 'Ingredientes.php';

class Ingredientes{

    private $titulo;
    private $descripcion;
    private $prioridad;
    private $duracion;
    private $color;
    private $estado;

    private int $carne=10;
    private int $pollo=9;
    private int $carneDeSoya=8;
    private int $tomate=7;
    private int $lechuga=6;
    private int $queso=5;
    private int $quesoVegano=4;
    
    public function __construct() {

    }

    public function setCarne($value) {
        $this->carne = $value;
        return $this;
    }

    public function setPollo($value) {
        $this->pollo = $value;
        return $this;
    }

    public function setCarneDeSoya($value) {
        $this->carneDeSoya = $value;
        return $this;
    }

    public function setTomate($value) {
        $this->tomate = $value;
        return $this;
    }

    public function setLechuga($value) {
        $this->lechuga = $value;
        return $this;
    }

    public function setQueso($value) {
        $this->queso = $value;
        return $this;
    }

    public function setQuesoVegano($value) {
        $this->quesoVegano = $value;
        return $this;
    }

    public function construir() {
        return $this;
    }


    public function getCarne() {
        return $this->carne;
    }

    public function getPollo() {
        return $this->pollo;
    }

    public function getCarneDeSoya() {
        return $this->carneDeSoya;
    }

    public function getTomate() {
        return $this->tomate;
    }

    public function getLechuga() {
        return $this->lechuga;
    }

    public function getQueso() {
        return $this->queso;
    }

    public function getQuesoVegano() {
        return $this->quesoVegano;
    }

    public function mostrar2() {
        return array(
            "Cantidad de Carne" => $this->getCarne(),
            "Cantidad de Pollo" => $this->getPollo(),
            "Cantidad de Carne de Soya" => $this->getCarneDeSoya(),
            "Cantidad de Tomate" => $this->getTomate(),
            "Cantidad de Lechuga" => $this->getLechuga(),
            "Cantidad de Queso" => $this->getQueso(),
            "Cantidad de Queso Vegano" => $this->getQuesoVegano()
        );
    }

    public function mostrar() {
        return json_encode($this->mostrar2());
    }
}