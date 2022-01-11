<?php
require_once 'models/Decorador.php';
require_once 'models/PaltaDecorador.php';
require_once 'models/ChampinonDecorador.php';
require_once 'models/Ingredientes.php';
require_once 'models/Preparaciones.php';

use models\Decorador;
use models\PaltaDecorador;
use models\ChampinonDecorador;
use models\Ingredientes;
use models\Preparaciones;

//creacion notificacion interna 1
$ingredientes = new Ingredientes();
$ingredientes->setCarne(10);
$ingredientes->setPollo(9);
$ingredientes->setCarneDeSoya(8);
$ingredientes->setTomate(7);
$ingredientes->setLechuga(6);
$ingredientes->setQueso(5);
$ingredientes->setQuesoVegano(4);
echo "Inventario de ingredientes<br>";
echo $ingredientes->mostrar(); 
echo "<br><br>";

// ejemplo decorador con notificacion interna 1 
$PaltaDecorador = new PaltaDecorador($ingredientes); 
$PaltaDecorador->setPalta(20);
$ChampinonDecorador = new ChampinonDecorador($PaltaDecorador);
$ChampinonDecorador->setChampinon(30);
echo "Ingredientes agregando palta y champinon con decorador<br>";
echo $ChampinonDecorador->mostrar();
echo "<br><br>";
$preparaciones = new Preparaciones();
$preparaciones->setBarrosLuco($ingredientes->getCarne());
$preparaciones->setLomoVegano($ingredientes->getCarneDeSoya());
$preparaciones->setLomoPollo($ingredientes->getPollo());
$preparaciones->setBarrosJarpa($ingredientes->getCarne());
$preparaciones->setChurrasco($ingredientes->getCarne());
echo "Preparaciones Disponibles<br>";
echo $preparaciones->mostrar();

