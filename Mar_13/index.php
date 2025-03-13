
<?php 

/*
Kata 55
Escriu un algoritme que llegeixi un nombre enter i determini si és parell o imparell.
Si és parell, que escrigui tots els parells de manera descendent des de si mateix fins a 0.
Si és imparell, que escrigui tots els parells de manera descendent des de si mateix fins a l'1.
El nombre que entri al programa ha d'entrar directament a la variable "number".
*/
do {
    $entry = readline("Entri un nombre entre 0 i 10.000: ");
    $options = [
        "options" => [
            "min_range" => 0,
            "max_range" => 10000
        ]
    ];
    $number = filter_var($entry, FILTER_VALIDATE_INT, $options);
    $resposta = "";

    if ($number === false) {
        echo "Nombre no vàlid, entri un nombre enter entre 0 i 10.000";
    }
} while ($number === false);

    if (($number % 2 === 0)) {
        $resposta = "Els nombres pares en ordre descendent son: " . $number;
        for ($i = $number-2; $i>=0; $i-=2)
        {
           $resposta = $resposta . ", " . $i;
        }
    }

    if ($number % 2 === 1) {
        $resposta = "Els nombres imparells en ordre desdendent son: " . $number;
        for ($i = $number -2; $i>=1; $i-=2) 
        {
            $resposta = $resposta . ", " . $i;
        }
    }
   
echo $resposta;
?>
