<?php
namespace vendor\Escuela;

// require_once 'Persona.php';
use vendor\Escuela\Persona;

class Estudiante extends Persona
{
    public $NumeroDeControl;
    public $Generacion;
    public $EntidadDeNacimiento;
    public $Nacionalidad;
}