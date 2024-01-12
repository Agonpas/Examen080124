<?php
include_once 'Arma.php';
enum Rasgo {
    case Astucia;
    case Talento;
}
class Personaje {
    private string $nombre;
    private int $fuerza;
    private int $percepcion;
    private int $carisma;
    private int $agilidad;
    private Rasgo $rasgo;
    private array $armas;

    public function __construct(string $nombre,int $fuerza, int $percepcion, int $carisma, int $agilidad, Rasgo $rasgo) {
        $this->nombre = $nombre;
        $this->fuerza = $fuerza;
        $this->percepcion = $percepcion;
        $this->carisma = $carisma;
        $this->agilidad = $agilidad;
        $this->rasgo = $rasgo;
    }
    public function __toString() {
        return "Nombre:  {$this->nombre}" . PHP_EOL . "Fuerza: {$this->fuerza}" . PHP_EOL . "Percepción: {$this->percepcion}" . PHP_EOL . "Carisma: {$this->carisma}" . PHP_EOL . "Agilidad: {$this->agilidad}". PHP_EOL . "Rasgo: {$this->rasgo->name}" . PHP_EOL;
    }
    /*setters*/
    public function setFuerza (int $fuerza) {
        $this->fuerza = $fuerza;
    }
    public function setPercepcion (int $percepcion) {
        $this->percepcion = $percepcion;
    }
    public function setCarisma (int $carisma) {
        $this->carisma = $carisma;
    }
    public function setAgilidad (int $agilidad) {
        $this->agilidad = $agilidad;
    }
    public function setRasgo (Rasgo $rasgo) {
        $this->rasgo = $rasgo;
    }
    public function agregarArma(Arma $arma) {
        $this->armas[] = $arma;
    }
    /*getters*/
    public function getNombre() : string {
        return $this->nombre;
    }
    public function getFuerza() : int {
        return $this->fuerza;
    }

    public function mostrarArmas() {
        if (empty($this->armas)) {
            echo "El {$this->nombre} no tiene armas" . PHP_EOL;
        } else {
            echo PHP_EOL . "El {$this->nombre} ha conseguido las siguientes armas: " . PHP_EOL;
            foreach ($this->armas as $indice=> $arma) {
                echo "+ El arma " . $indice + 1 . " es: " . $arma->getNombre() .  PHP_EOL . "- Tiene una capacidad para munición de: " . $arma->getMunicion() .  PHP_EOL . "- Hace un daño de: " . $arma->getDanyo() .  PHP_EOL . "- Tiene un alcance de: " . $arma->getAlcance() . PHP_EOL;
            }
        }
    }

}
?>