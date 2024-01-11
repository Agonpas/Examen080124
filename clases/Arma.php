<?php
class Arma {
    private string $nombre;
    private int $municion;
    private int $damage;
    private int $alcance;
    public function __construct(string $nombre, int $municion, int $damage,int $alcance) {
        $this->nombre =  $nombre;
        $this->municion =  $municion;
        $this->damage =  $damage;
        $this->alcance =  $alcance;
    }
    public function __toString() {
        return "El nombre es {$this->nombre}" . PHP_EOL. "La munición es de {$this->municion} " . PHP_EOL . "El daño es de {$this->damage}". PHP_EOL . "El alcance es: {$this->alcance}";
    }
}

?>