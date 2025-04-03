<?php

abstract class Personaje {
    protected string $nom = "";
    protected int $puntsVida = 0;
    protected int $puntsMagia = 0;
    protected array $comandes = [];

public function realitzaComanda(string $comanda) : string {

    return "__CLASS__ . ha . $accioComanda"; 
}


}

?>