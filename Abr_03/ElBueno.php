<?php

require_once "Personaje.php";

class ElBueno extends Personaje {
    protected string $nom = "El Bueno";
    protected int $puntsVida = 1000;
    protected int $puntsMagia = 1500;
    protected array $comandes = [
        "nomComanda" => "volar",
        "accioComanda" => "ha volat"
    ];

    public function realitzaComanda(string $comanda) : string {

        return "__CLASS__ . ha . $accioComanda"; 
    }

    public 

}

?>