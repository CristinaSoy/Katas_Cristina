<?php declare(strict_types=1);

$stringPista = "___|__|___|_|__";
$carrera = ["run","run","run",'jump',"run","run",'jump',"run","run","run",'jump',"run",'jump',"run","run",];

//convierto $pista en array
$pista = str_split($stringPista);
print_r($arrayPista);
PHP_EOL;

//controlo que longitud de carrera y pista sean iguales
if (count($pista)!= count($carrera)) {
    echo "datos incorrectos";
}

function evaluaCarrera($carrera, $pista) : array {
    $pistaEvaluada = $pista;

    for ($i=0; $i < count($carrera); $i++) {
       if ( ($carrera[$i] = 'run') && $pista[$i] = ['|']) {
        $pistaEvaluada[$i] = "/";
       }
       if (($carrera[$i] = 'jump') && ($pista[$i] = ['_'])) {
        $pistaEvaluada[$i] = "X";
       }
    }

    return $pistaEvaluada;
}

function imprimeResultado ($pistaEvaluada) {
    if (in_array('X', $pistaEvaluada)) {
       $resultado = "Lo siento, saltaste más de la cuenta";
        return $resultado
    }

    if (in_array('/', $pistaEvaluada)) {
        $resultado = "Lo siento, te estrellaste";
        return $resultado 
    } 
    else {
        $resultado = "Felicidades, has ganado";
        return $resultado ;
    }
echo $resultado;
    }
}