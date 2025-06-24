<?php
$enlace = "https://github.com/CloudSalander/kata-hurdle-race";

$acciones = ["run", "jump", "run", "jump", "jump", "run"];
$pista = "_|_|__";

   public function evaluarCarrera(array $acciones, string $pista): bool {
        $resultado = str_split($pista);   
        $carreraOk = true;      
    
        foreach ($acciones as $i => $accion) {
            if (($accion === "run" && $pista[$i] === "|") || ($accion === "jump" && $pista[$i] === "_")) { // realiza acción incorrecta
                $carreraOk = false;
                $resultado[$i] = ($accion === "run") ? "/" : "x"; //determina si la ha espifiado saltando o corriendo
            }
        }
    
        echo implode("", $resultado) . PHP_EOL;
    
        return $carreraOk;
    }
       
    $resultado = evaluarCarrera($acciones, $pista);
    echo $resultado ? "Carrera superada" : "Carrera fallida";




?>

return !in_array("/", $resultado) && !in_array("x", $resultado);