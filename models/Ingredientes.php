<?php
namespace models;

require_once 'Ingredientes.php';

class Ingredientes{

    private int $carne;
    private int $pollo;
    private int $carneDeSoya;
    private int $tomate;
    private int $lechuga;
    private int $queso;
    private int $quesoVegano;
    
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

    public function descontarCarne() {
        $this->carne = $this->carne - 1;
    }

    public function descontarPollo() {
        $this->pollo = $this->pollo - 1;
    }

    public function descontarCarneDeSoya() {
        $this->carneDeSoya = $this->carneDeSoya - 1;
    }

    public function descontarCarneDeSoya() {
        $this->carneDeSoya = $this->carneDeSoya - 1;
    }

    public function descontarCarneDeSoya() {
        $this->carneDeSoya = $this->carneDeSoya - 1;
    }

    public function descontarCarneDeSoya() {
        $this->carneDeSoya = $this->carneDeSoya - 1;
    }

    public function descontarCarneDeSoya() {
        $this->carneDeSoya = $this->carneDeSoya - 1;
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