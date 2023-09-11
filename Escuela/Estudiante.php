<?php
namespace Escuela;

require_once 'Persona.php';
use Escuela\Persona;

class Estudiante extends Persona
{
    public $NumeroDeControl;
    public $Generacion;
    public $EntidadDeNacimiento;
    public $Nacionalidad;
}