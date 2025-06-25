<?php

$acciones = ["run", "jump", "run", "jump", "jump", "run"];
$strPista = "|_|_|_";
$pista = str_split($strPista);


    function evaluarCarrera(array $acciones, array $pista): array {
      //  $arrayPista = str_split($pista);   
          
        foreach ($acciones as $i => $accion) {
            if ( ($accion === "run" && $pista[$i] === "|") 
               || ($accion === "jump" && $pista[$i] === "_") ) 
            {               
                $pista[$i] = ($accion === "run") ? "/" : "x"; //determina si la ha espifiado saltando o corriendo
            }
        }
    
        echo implode("", $pista) . PHP_EOL;
        return $pista;
    }
    
    function imprimeResultado(array $resultado): string {

        return (!in_array("/", $resultado) && !in_array("x", $resultado))? "Carrera superada" : "Carrera fallida";
    }

//controlo que longitud de carrera y pista sean iguales
if (count($pista)!= count($acciones)) {
    echo "datos incorrectos";
} else {

    $resultado = evaluarCarrera($acciones, $pista);
    echo imprimeResultado($resultado);
}
?>