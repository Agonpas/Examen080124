<?php
include_once 'Arma.php';
enum Rasgo {
    case Astucia;
    case Talento;
}
class Personaje {
    private int $fuerza;
    private int $percepcion;
    private int $carisma;
    private int $agilidad;
    private Rasgo $rasgo;
    private array $armas;

    public function __construct(int $fuerza, int $percepcion, int $carisma, int $agilidad) {
        $this->fuerza = $fuerza;
        $this->percepcion = $percepcion;
        $this->carisma = $carisma;
        $this->agilidad = $agilidad;
    }
    /*public function agregarArma(Arma ) {

    }*/
}
?>