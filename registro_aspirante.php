<?php require_once 'header.php'; ?>

<?php
use vendor\Escuela\Aspirante;

// recibir valores del formulario
if (isset($_POST['txtNombres']) and $_POST['txtNombres'] != '' and 
    isset($_POST['txtPrimerApellido']) and $_POST['txtPrimerApellido'] != '' and
    isset($_POST['txtSegundoApellido']) and $_POST['txtSegundoApellido'] != '' and
    isset($_POST['optGenero']) and $_POST['optGenero'] != '')
{
    // los valores llegaron bien
    // crear un objeto de tipo aspirante
    $aspirante = new Aspirante();
    // y recoger los valores que llegaron
    $aspirante->Nombres = $_POST['txtNombres'];
    $aspirante->PrimerApellido = $_POST['txtPrimerApellido'];
    $aspirante->SegundoApellido = $_POST['txtSegundoApellido'];
    $aspirante->Genero = $_POST['optGenero'];
    var_dump($aspirante);
} else {
    header('Location: .');
}
?>

<?php require_once 'footer.php'; ?>