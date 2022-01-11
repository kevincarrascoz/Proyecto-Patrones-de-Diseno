<?php

namespace models;
require_once "Preparaciones.php";

class Menu extends Preparaciones{



    public function __construct(Preparaciones $componente) {
        $this->componente = $componente;
     
    }

    public function getComponente() {
        return $this->componente;
    }

    public function menuSandwichesVeganos(){
        return json_encode(array(
            "Barros Lomo Vegan" => $this->componente->getLomoVegano()
        ));
    }

    Public function MenuSandwichesCarne(){
        return json_encode(array(
            "Barros Luco" => $this->componente->getBarrosLuco(),
            "Barros Jarpa" => $this->componente->getBarrosJarpa(),
            "Churrasco" => $this->componente->getChurrasco()
        ));
    }

    Public function MenuSandwichesPollo(){
        return json_encode(array(
            "Hamburguesa Lomo Pollo" => $this->componente->getLomoPollo()
        ));
    }






}