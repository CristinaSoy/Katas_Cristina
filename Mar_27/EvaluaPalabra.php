<?php
declare (strict_types=1);

class EvaluaPalabra {
    
     public static array $tablaPuntos = [
        '/' => 0, //si se introduce palabra inválida
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
        'f' => 6,
        'g' => 7,
        'h' => 8,
        'i' => 9,
        'j' => 10,
        'k' => 11,
        'l' => 12,
        'm' => 13,
        'n' => 14,
        'ñ' => 15,
        'o' => 16,
        'p' => 17,
        'q' => 18,
        'r' => 19,
        's' => 20,
        't' => 21,
        'u' => 22,
        'v' => 23,
        'w' => 24,
        'x' => 25,
        'y' => 26,
        'z' => 27,
    ];
    
    // sanitiza la palabra
    public static function validaEntrada(string $palabra) : string {
        if (preg_match('/^[a-zA-Z]+$/', $palabra)) {
            $palabra = strtolower($palabra);

        } else {
            $palabra="/";
        }            
        return $palabra;
    }

    //calcula puntos 
    public static function calculaPuntos($palabra) : int {
        // convierte palabra en array con letras
        $letras = str_split($palabra);
        $longitud= strlen($palabra);
        $puntos = 0;

        foreach ($letras as $letra) {
            if (isset(self::$tablaPuntos[$letra])) {
                $puntos += self::$tablaPuntos[$letra];
            }
        }
      
        return $puntos;
    }    
}
?>