<?php

namespace models;

require_once 'Ingredientes.php';

abstract class Decorador extends Ingredientes
{
    /**
     * 
     * @var ComponenteGraficoIngredientes
     */
    private $componente;

    /**
     *
     * @param ComponenteGraficoIngredientes $componente            
     */
    public function __construct(Ingredientes $componente)
    {
        $this->componente = $componente;
    }

    public function getComponente()
    {
        return $this->componente;
    }

    public function mostrar2()
    {
        return $this->componente->mostrar2();
    }

    public function mostrar()
    {
        return json_encode($this->mostrar2());
    }

    public function setCarne($value)
    {
        $this->componente->carne = $value;
        return $this;
    }

    public function setPollo($value)
    {
        $this->componente->pollo = $value;
        return $this;
    }

    public function setCarneDeSoya($value)
    {
        $this->componente->carneDeSoya = $value;
        return $this;
    }

    public function setTomate($value)
    {
        $this->componente->tomate = $value;
        return $this;
    }

    public function setLechuga($value)
    {
        $this->componente->lechuga = $value;
        return $this;
    }

    public function setQueso($value)
    {
        $this->componente->queso = $value;
        return $this;
    }

    public function setQuesoVegano($value)
    {
        $this->componente->quesoVegano = $value;
        return $this;
    }

    public function getCarne()
    {
        return $this->componente->carne;
    }

    public function getPollo()
    {
        return $this->componente->pollo;
    }

    public function getCarneDeSoya()
    {
        return $this->componente->carneDeSoya;
    }

    public function getTomate()
    {
        return $this->componente->tomate;
    }

    public function getLechuga()
    {
        return $this->componente->lechuga;
    }

    public function getQueso()
    {
        return $this->componente->queso;
    }

    public function getQuesoVegano()
    {
        return $this->componente->quesoVegano;
    }
}
