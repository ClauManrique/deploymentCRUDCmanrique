<?php

echo $controlador;
echo $accion;

include_once("Controlador/controlador_".$controlador.".php");

$objControlador="Controlador".ucfirst($controlador);
$controlador= new $objControlador();
$controlador->$accion();

?>