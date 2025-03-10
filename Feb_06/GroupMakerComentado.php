<?php
class GroupMaker {
    private array $students;
    private int $groupSize;
    private array $groupedStudents;

    const ENTER_STUDENTS_MSG = "Please, enter students one by one. Empty entry to stop: ";
    const ENTER_GROUP_SIZE_MSG = "Please, enter group number: ";

    public function __construct() {
        $this->students = [];
        $this->groupedStudents = [];
    }

    public function enterStudents(): void {
        $student = readline(self::ENTER_STUDENTS_MSG); //La funcion readline muestra un prompt al usuer y devuelve lo que el user entra. 
        //TODO: Input validation?
        while($student != "") {      // controla que debe seguir con el bucle
            array_push($this->students,$student);   // Si le han entrado un nombre lo graba en el array $students de esta clase
            $student = readline(self::ENTER_STUDENTS_MSG); //vuelve a pedir que entren el siguiente nombre
        }
    }
    public function enterGroupSize(): void { 
        //TODO: Validate this input
        //Asigna el valor que le entran a la var groupSize de esta clase
        $this->groupSize = intval(readline(self::ENTER_GROUP_SIZE_MSG));
        //intval: devuelve el valor entero de una var
    }
    public function generateGroups(): void {
        $this->groupedStudents = $this->generateEmptyGroups();
        
        $students_shuffle = $this->students;
        shuffle($students_shuffle);
      
        $con = 0;
        foreach($students_shuffle as $student) {
            array_push($this->groupedStudents[$con%$this->groupSize],$student);
            ++$con;
        }
    }

    // Crea un array de los grupos vacíos. Cada grupo es un subarray
    private function generateEmptyGroups(): array {
        $groups = []; //define un array llamado grupos

        // bucle for se ejecuta tantas veces como grupos se ha pedido
        for($con = 0; $con < $this->groupSize; ++$con) {
            // crea un subarray con el numero de clave de grupo dec 0 a N. 
            // siendo N el numero de grupo
            $groups[$con] = []; 
            // existen tantos subarrays como grupos. Uno llamado $groups[0], $groups[1], $groups[2], etc
        return $groups;
    }
    
    public function showGeneratedGroups(): void {
        for($i=0; $i < count($this->groupedStudents); ++$i) {
            $this->printGroup($this->groupedStudents[$i], $i);
        }
    }

    private function printGroup(array $studentGroup, int $count): void {
        echo "Group ".($count+1).":".PHP_EOL;
        foreach($studentGroup as $name) {
            echo $name." ";
        }
        echo PHP_EOL;     
    }
}
?>