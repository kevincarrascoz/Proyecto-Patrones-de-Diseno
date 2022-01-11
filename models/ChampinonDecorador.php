<?php
namespace models;


require_once 'Decorador.php';

class ChampinonDecorador extends Decorador{

    public int $champinon;

    public static function getPrimerChampinonDecorador($decorado) {
        $obj = $decorado;
        $claseFuente = '\models\ChampinonDecorador';
        $claseDeco = '\models\Decorador';
        while(!is_a($obj, $claseFuente) and is_a($obj, $claseDeco)) {
            $obj = $obj->getComponente();
        }
        if (is_a($obj, $claseFuente)) {
            return $obj;
        } else {
            return null;
        }
    }

    public static function claseGetChampinon($decorado) {
        $obj = ChampinonDecorador::getPrimerChampinonDecorador($decorado);
        return $obj->getChampinon();
    }

    public static function claseSetChampinon($decorado, $champinon) {
        $obj = ChampinonDecorador::getPrimerChampinonDecorador($decorado);
        $obj->setChampinon($champinon);
        return true;
    }

    public function setChampinon($champinon) {
        $this->champinon = $champinon;
    }

    public function getChampinon(){
        return $this->champinon;
    }

    public function descontarChampinon() {
        $this->champinon = $this->champinon - 1;
    }

    public function mostrar2() {
        $obj = parent::mostrar2();
        $obj['Cantidad de Champinon'] = $this->getChampinon();
        return $obj;
    }
    
}

?>