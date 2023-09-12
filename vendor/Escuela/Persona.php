<?php

namespace vendor\Escuela;

abstract class Persona
{
    public $Nombres;
    public $PrimerApellido;
    public $SegundoApellido;
    public $Genero;
    public $Curp;
    public $Domicilio;

    // camelCase para los métodos
    public function nombreCompleto()
    {
        return $this->Nombres." ".$this->PrimerApellido." ".$this->SegundoApellido;
    }
}

// $persona = new Persona();