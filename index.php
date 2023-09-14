<?php
require_once "config.inc.php";
require_once "autoload.php";

// echo APP_DIR;
use vendor\Escuela\Aspirante;
$aspirante = new Aspirante();
$aspirante->Nombres = "Evelyn";
$aspirante->PrimerApellido = "Espinoza";
$aspirante->SegundoApellido = "Castro";

// echo $aspirante->nombreCompleto();

// TODO: Probar el uso de la configuración y la autocarga desde un servidor web
header('Location: home.php');