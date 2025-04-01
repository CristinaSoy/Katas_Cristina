<?php
require_once "EvaluaPalabra.php";

echo("Bienvenido a este jueguecito.". PHP_EOL. "Has de introducir una palabra cuyas letras sumen 100" . PHP_EOL. "¡Ni más ni menos!". PHP_EOL);
do {
    $palabra = readline("Introduce una palabra: ");
    $palabra= EvaluaPalabra::validaEntrada($palabra);
    $puntos = EvaluaPalabra::calculaPuntos($palabra);
    if ($puntos == 0) {
        echo ("Introduce una palabra válida (sin espacios ni caractéres especiales).".PHP_EOL);
    }else{
        echo ("Tu palabra vale $puntos. Sigue probando.". PHP_EOL);
    }

}
while ($puntos!=100);

echo "Lo conseguiste";

?>