<?php
namespace models;


require_once 'Decorador.php';

class PaltaDecorador extends Decorador{

    public int $palta;
   
    public static function getPrimerPaltaDecorador($decorado) {
        $obj = $decorado;
        $claseInter = '\models\PaltaDecorador';
        $claseDeco = '\models\Decorador';
        while(!is_a($obj, $claseInter) and is_a($obj, $claseDeco)) {
            $obj = $obj->getComponente();
        }
        if (is_a($obj, $claseInter)) {
            return $obj;
        } else {
            return null;
        }
    }

    public static function claseGetPalta($decorado) {
        $obj = PaltaDecorador::getPrimerPaltaDecorador($decorado);
        return $obj->getPalta();
    }

    public static function claseSetPalta($decorado, $palta) {
        $obj = PaltaDecorador::getPrimerPaltaDecorador($decorado);
        $obj->setPalta($palta);
        return true;
    }

    public function setPalta($palta) {
        $this->palta = $palta;
    }

    public function getPalta(){
        return $this->palta;
    }

    public function descontarPalta() {
        $this->palta = $this->palta - 1;
    }

    public function mostrar2() {
        $obj = parent::mostrar2();
        $obj['Cantidad de Palta'] = $this->getPalta();
        return $obj;
    }
}
