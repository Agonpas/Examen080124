<?php
include_once 'clases/Arma.php';
include_once 'clases/Personaje.php';

$arma1= new Arma("Pistola", 25, 3,5);
$personaje1 = new Personaje("Morador del refugio 13", 4, 5, 3, 4, Rasgo::Astucia);
$personaje2 = new Personaje("Súper Mutante del páramo", 10, 2, 2, 2, Rasgo::Talento);
echo $arma1;
echo $personaje1;
$personaje1->agregarArma(new Arma("Pistola", 25, 3, 5));
$personaje1->agregarArma(new Arma("Ametralladora", 100, 4, 7));
$personaje1->mostrarArmas();
$personaje2->mostrarArmas();
?>