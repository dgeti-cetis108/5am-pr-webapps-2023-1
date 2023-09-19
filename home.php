<?php require_once 'header.php'; ?>
<?php
use vendor\Escuela\Docente;
$docente = new Docente();
$docente->Nombres = 'Bidkar';
?>

<main>
    <h1>
        <?= APP_NAME ?>
    </h1>
    <div>
        Docente: <?= $docente->Nombres ?>
    </div>
</main>

<?php require_once 'footer.php'; ?>