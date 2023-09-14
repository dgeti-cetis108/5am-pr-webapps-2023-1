<?php

spl_autoload_register(function ($classname) {
    // concatenar ruta de la app y el nombre de la clase
    $path = APP_DIR . $classname;
    // reemplazar las diagonales invertidas por normales
    $path = str_replace('\\', '/', $path);
    // agregar la extensión al archivo
    $path .= '.php';

    if (is_readable($path)) {
        // el archivo existe y se puede leer
        // incluirlo
        require_once $path;
    } else {
        exit("No se puede acceder al archivo $path");
    }
});
