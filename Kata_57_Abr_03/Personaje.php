<?php

class Personaje {

    private static int $minVida = 0;
    private static int $minMagia = 0;
    private static array $registreDePersonatjes = [
        "Nom" => "", 
        "PuntsVida" => 0, 
        "PuntsMagia" => 0, 
        "Comandes" => ["Nom" => "", "Accio" => "", "Missatge" => ""],
    ];
   

    public function __construct(
        protected string $nom = "",
        protected int $puntsVida = 0,
        protected int $puntsMagia = 0,
        protected array $comandes = ["Nom" => "", "Accio" => "", "Missatge" => ""],
    ){}
    
   
    public function calculaMinVida(){}



}

?>