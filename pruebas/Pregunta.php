<?php

// PascalCase
// snake_case

class Pregunta
{
    public $Pregunta;
    public $Opcion1;
    public $Opcion2;
    public $Opcion3;
    public $Respuesta;
}

// como utilizar la clase Pregunta (crear un objeto de tipo Pregunta)
$preg1 = new Pregunta();
$preg1->Pregunta = "¿debemos salir ya?";
$preg1->Opcion1 = "Si";
$preg1->Opcion2 = "Si";
$preg1->Opcion3 = "Si";
$preg1->Respuesta = "Si";

echo 'Pregunta: '.$preg1->Pregunta.",\nRespuesta: ".$preg1->Respuesta;
