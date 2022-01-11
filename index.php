<?php
require_once 'models/Decorador.php';
require_once 'models/PaltaDecorador.php';
require_once 'models/ChampinonDecorador.php';
require_once 'models/Ingredientes.php';

use models\Decorador;
use models\PaltaDecorador;
use models\ChampinonDecorador;
use models\Ingredientes;

//creacion notificacion interna 1
$notificacionInterna = new Ingredientes();
$notificacionInterna->setCarne(10);
$notificacionInterna->setPollo(9);
$notificacionInterna->setCarneDeSoya(8);
$notificacionInterna->setTomate(7);
$notificacionInterna->setLechuga(6);
$notificacionInterna->setQueso(5);
$notificacionInterna->setQuesoVegano(4);
echo "Inventario de ingredientes<br>";
echo $notificacionInterna->mostrar(); 
echo "<br><br>";

// ejemplo decorador con notificacion interna 1 
$PaltaDecorador = new PaltaDecorador($notificacionInterna); 
$PaltaDecorador->setPalta(20);
$ChampinonDecorador = new ChampinonDecorador($PaltaDecorador);
$ChampinonDecorador->setChampinon(30);
echo "Ingredientes agregando palta y champinon con decorador<br>";
echo $ChampinonDecorador->mostrar();
