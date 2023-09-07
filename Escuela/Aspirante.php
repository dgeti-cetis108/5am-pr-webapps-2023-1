<?php
// cuando un archivo php solo tiene código php, no es necesario
// cerrar la etiqueta <?php con ? > de hecho no debes hacerlo
namespace HolaMundo\Escuela;

class Aspirante extends Persona
{
    public $EntidadDeNacimiento; // Entidad Ej: Sinaloa
    public $Nacionalidad; // Mexicana, Nacido en el Extranjero
}