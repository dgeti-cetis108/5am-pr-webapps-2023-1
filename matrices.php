<?php

// Tipos de datos por referencia

// Arrays (Matrices)
// var cadenasArray = new string[3];
// matriz de 3 posiciones que guarde cadenas de texto
$cadenas_array = array();
$otro_array = [];
$otro_mas = $cadenas_array;

$cadenas_array[100] = "cien";
echo $cadenas_array[100];
$cadenas_array[100] = "CIEN";

echo $otro_mas[100];
echo "\n";
echo gettype($otro_mas);
var_dump($otro_mas);

echo "\n";
// matriz basada en indices
$preg1 = ["¿de donde es el perro mocho?","Culiacan","Sinaloa","Guasave","Guasave"];
var_dump($preg1);
echo $preg1[4];

// matriz asociativa
$preg2 = [
    "pregunta" => "¿que es booleano?",
    "opcion1" => "falso",
    "opcion2" => "verdadero",
    "opcion3" => "ninguna de las dos",
    "respuesta" => "falso"
];
echo "\n";
echo $preg2["pregunta"];
var_dump($preg2);