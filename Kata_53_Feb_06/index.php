<?php declare(strict_types=1);


// Variables dadas
$totalGroups = 3;     //numero de grupos
$students = ['Luis', 'Pere', 'Anna', 'Carme', 'Ada', 'Jaume', 'Simón', 'Isabel', 'Luz', 'Luna'];


//Array de alumnos reordenado aleatoriamente:
shuffle($students);

// Calculo total de estudiantes
$totalStudents = count($students); //numero alumnos total en el array

//Creo un array con tantos subarrays vacíos como numero de grupos
$groups = array_fill( 1, $totalGroups, []);

// Calculo alumnos por grupo: la parte entera y el resto de la división
$integerGroupSize = intval($totalStudents / $totalGroups); //3
$modulGroupSize = $totalStudents % $totalGroups;  // 1

// inicializo contador de alumnos
$studentIndex = 0;

// Asignar alumnos: parte entera del cociente
for ($i = 0; $i < $integerGroupSize; $i++) {
    for ( $j = 1; $j <= $totalGroups; $j++) {
        array_push($groups[$j], $students[$studentIndex]);
        $studentIndex++;
    }
}

// Asignar el resto del cociente
for ($i = 1; $i <= $modulGroupSize; $i++) {    
   array_push($groups[$i],  $students[$studentIndex]);
   $studentIndex++;
}

// Imprime grupos
foreach ($groups as $key => $group) {
    echo "Grupo " . $key . ": ";
    foreach ($group as $student) {
        echo "$student" . " ";
    }
    $studentsInThisGroup = count($group);
    echo  PHP_EOL ."         Alumnos totales Grupo ". $key. ": " . $studentsInThisGroup . PHP_EOL;
}


?>