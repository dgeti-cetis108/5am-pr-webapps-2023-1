<?php require_once 'header.php'; ?>

<main>
    <h1>Registro de aspirantes</h1>
    <form action="registro_aspirante.php" method="post">
        <div>
            <label for="txtNombres">Nombres</label>
            <input type="text" name="txtNombres" id="txtNombres">
        </div>
        <div>
            <label for="txtPrimerApellido">Primer Apellido</label>
            <input required type="text" name="txtPrimerApellido" id="txtPrimerApellido">
        </div>
        <div>
            <label for="txtSegundoApellido">Segundo Apellido</label>
            <input required type="text" name="txtSegundoApellido" id="txtSegundoApellido">
        </div>
        <div>
            <label>Género</label>
            <label>
                <input required type="radio" name="optGenero" id="optGenero" value="Hombre">
                Hombre
            </label>
            <label>
                <input required type="radio" name="optGenero" id="optGenero" value="Mujer">
                Mujer
            </label>
        </div>
        <div>
            <button type="submit">
                Registrar
            </button>
        </div>
    </form>
</main>

<?php require_once 'footer.php'; ?>