<?php
use vendor\Escuela\Docente;
$docente = new Docente();
$docente->Nombres = 'Bidkar';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= APP_NAME ?>
    </title>
</head>
<body>
    <h1>
        <?= APP_NAME ?>
    </h1>
    <div>
        Docente: <?= $docente->Nombres ?>
    </div>
</body>
</html>