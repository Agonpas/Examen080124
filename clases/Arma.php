<?php
class Arma {
    private string $nombre;
    private int $municion;
    private int $danyo;
    private int $alcance;
    public function __construct(string $nombre, int $municion, int $danyo,int $alcance) {
        $this->nombre =  $nombre;
        $this->municion =  $municion;
        $this->danyo =  $danyo;
        $this->alcance =  $alcance;
    }
    public function __toString() {
        return "El nombre es {$this->nombre}" . PHP_EOL. "La munición es de {$this->municion} " . PHP_EOL . "El daño es de {$this->danyo}". PHP_EOL . "El alcance es: {$this->alcance}" . PHP_EOL;
    }
    /*getters*/
    public function getNombre(): string {
        return $this->nombre;
    }
    public function getMunicion(): int {
        return $this->municion;
    }
    public function getDanyo(): int {
        return $this->danyo;
    }
    public function getAlcance(): int {
        return $this->alcance;
    }
}

?>