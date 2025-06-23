<?php declare(strict_types=1);
$n = 2; 
$alumnes = ["Pere", "Joan", "Jesus", "Mayte", "Julia"];


function distribuirAlumnosEnGrupos(array $alumnes, int $n) {
    
    shuffle($alumnes);
    $grups = array_fill(1, $n, []); // Inicializa los grupos
    echo "Grups: ";
    print_r($grups);
    echo "<br>";

    foreach ($alumnes as $index => $alumno) {
        $grupoIndex = ($index % $n) + 1; // Distribuye en grupos cíclicamente
        $grupos[$grupoIndex][] = $alumno;
    }

    // Imprimir los grupos
    foreach ($grupos as $grupo => $integrantes) {
        echo "Grupo $grupo: " . implode(", ", $integrantes) . PHP_EOL;
    }
}

// Definir alumnos y número de grupos
$alumnos = ["Pedro", "Luis", "Carmen", "Laura", "Ana", "Jose"]; // Seis alumnos en este caso
$n = 2; // Número de grupos

distribuirAlumnosEnGrupos($alumnos, $n);
?>