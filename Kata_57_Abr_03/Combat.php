<?php declare(strict_types=1);

use Personaje;

class Combat {

    private array $personajes;

    public function __construct() {
        
        //Crear els tres personatjes que s'enfronten en combat
    $pers1 = new Personaje("Isabel", 10500, 13520, ['volar', 'sanar', 'reir']);
    $pers2 = new Personaje("Paco", 1500, 3520, ['gritar', 'ganar dinero', 'volar']);
    $pers3 = new Personaje("Lola", 1200, 73520, ['votar', 'escribir', 'cantar']);
    }
}