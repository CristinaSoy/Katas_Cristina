<?php 

define('MIN', 0);
define('MAX', 100);
define('SUCCESS_MSG', 'Brilliant! you got it');

$number = random_int(MIN, MAX);

echo "Write an integer number between 0 and 100. ". PHP_EOL;

    function get_valid_number() 
    {
        $validInput=-1;

        do {
            $input = readline("Your number: ");

            if (!ctype_digit($input)) {
                echo "Please enter a valid number. ";         
            } else {           
                $input = intval($input);            
                if (($input < MIN || $input > MAX)) { 
                    echo "Please enter number between 0 and 100. " . PHP_EOL;
                } else {      
                    $validInput = $input;
                }
            }
        } while ($validInput != $input);

        return $validInput;
    }

    function show_result($number, $validInput) {
        $result="";

        if ($validInput>$number) {
            $result = "your number is bigger than mine. Try again! ";
        } else if ($validInput<$number) {
            $result = "your number is smaller than mine. Try again! ";
        } else {
            $result= SUCCESS_MSG;
        }
        echo $result;
        return $result;
    }

do {
    $input = get_valid_number();
    $result = show_result($number, $input);

} while ($result != SUCCESS_MSG);

?>