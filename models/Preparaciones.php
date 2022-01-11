<?php

namespace models;
require_once "Ingredientes.php";

class Preparaciones {
    private $barrosLuco;
    private $lomoVegano;
    private $lomoPollo;
    private $barrosJarpa;
    private $churrasco;

    public function __construct() {
     
    }

    public function setBarrosLuco($cantidadCarne){
        if($cantidadCarne>=1){
            $this->barrosLuco = true;
            return $this;
        }else{
            $this->barrosLuco = false;
            return $this;
        }
    }

    public function setLomoVegano($cantidadCarnedeSoya){
        if($cantidadCarnedeSoya>=1){
            $this->lomoVegano = true;
            return $this;
        }else{
            $this->lomoVegano = false;
            return $this;
        }
    }
    public function setLomoPollo($cantidadPollo){
        if($cantidadPollo>=1){
            $this->lomoPollo = true;
            return $this;
        }else{
            $this->lomoPollo = false;
            return $this;
        }
        
    }
    public function setBarrosJarpa($cantidadCarne){
        if($cantidadCarne>=1){
            $this->barrosJarpa = true;
            return $this;
        }else{
            $this->barrosJarpa = false;
            return $this;
        }
    }
    public function setChurrasco($cantidadCarne){
        if($cantidadCarne>=1){
            $this->churrasco = true;
            return $this;
        }else{
            $this->churrasco = false;
            return $this;
        }
    }

    public function getBarrosLuco() {
        return $this->barrosLuco;
    }
    public function getLomoVegano() {
        return $this->lomoVegano;
    }
    public function getLomoPollo() {
        return $this->lomoPollo;
    }
    public function getBarrosJarpa() {
        return $this->barrosJarpa;
    }
    public function getChurrasco() {
        return $this->churrasco;
    }

    public function mostrar() {
        return json_encode($this->mostrar2());
    }

    public function mostrar2() {
        return array(
            "Barros Luco" => $this->getBarrosLuco(),
            "Barros Lomo Vegan" => $this->getLomoVegano(),
            "Lomo Pollo" => $this->getLomoPollo(),
            "Barro Jarpa" => $this->getBarrosJarpa(),
            "Churrasco" => $this->getChurrasco()
        );
    }

}