<?php
include_once 'clases/Arma.php';
include_once 'clases/Personaje.php';

$arma1= new Arma("Pistola", 25, 3,5);
$personaje1 = new Personaje(10,5,3,4);
echo $arma1;
?>