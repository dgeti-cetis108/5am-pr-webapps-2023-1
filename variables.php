<?php

// tipos de datos PHP
$entero = 10;
echo gettype($entero);

echo "\n";
$double = 3.65;
echo gettype($double);

echo "\n";
$cadena = "el meñique";
echo gettype($cadena);

echo "\n";
$booleano = true;
echo gettype($booleano);

// tipos de datos primitivos
$a = 10;
$b = $a;
$a++;
echo $b; // cual es el resultado?