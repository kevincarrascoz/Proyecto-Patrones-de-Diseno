<?php
namespace models;

interface TipoPedido
{
    function mostrar();
    function mostrar2();
    function calcularValorPedido($value);
}
