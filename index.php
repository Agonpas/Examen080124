<?php
include_once 'clases/Arma.php';
include_once 'clases/Personaje.php';

$arma1= new Arma("Pistola", 25, 3,5);
$personaje1 = new Personaje("Morador del refugio 13", 10, 5, 3, 4, Rasgo::Astucia);
echo $arma1;
$personaje1->agregarArma(new Arma("Pistola", 25, 3, 5));
$personaje1->mostrarArmas();

?>