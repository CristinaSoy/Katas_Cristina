<?php declare(strict_types=1);

$stringPista = "___|__|___|_|__";
$carrera = ["run","run","run",'jump',"run","run",'jump',"run","run","run",'jump',"run",'jump',"run","run",];

//convierto $pista en array
$pista = str_split($stringPista);

//controlo que longitud de carrera y pista sean iguales
if (count($pista)!= count($carrera)) {
    echo "datos incorrectos";
}

echo "Tu carrera: ";
$pistaEvaluada = evaluaCarrera($carrera, $pista);
echo PHP_EOL;
echo imprimeResultado($pistaEvaluada);


function evaluaCarrera($carrera, $pista) : array {
    $pistaEvaluada = $pista;

    for ($i=0; $i < count($carrera); $i++) {
       if ( ($carrera[$i] == 'run') && ($pista[$i] == ['|']) ) {
        $pistaEvaluada[$i] = "/";
       }
       else if ( ($carrera[$i] == 'jump') && ($pista[$i] == ['_']) ) {
        $pistaEvaluada[$i] = "X";
       }
    }

    print implode($pistaEvaluada);
    return $pistaEvaluada;
}

function imprimeResultado (array $pistaEvaluada) : string {
    if (in_array('X', $pistaEvaluada)) {
       $resultado = "Lo siento, saltaste más de la cuenta";
       return $resultado;
    }

    if (in_array('/', $pistaEvaluada)) {
        $resultado = "Lo siento, te estrellaste";
        return $resultado;
    } 
    else {
        $resultado = "Felicidades, has ganado";
        return $resultado ;
    }
    echo $resultado;
}
