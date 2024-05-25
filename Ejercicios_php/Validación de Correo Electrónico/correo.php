<!DOCTYPE html>
<html>
<head>
    <title>Validación de Correo Electrónico</title>
</head>
<body>
    <h1>Validación de Correo Electrónico</h1>

    <form method="POST">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" id="correo" required>
        <input type="submit" value="Validar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el correo electrónico del usuario del formulario
        $correo = $_POST["correo"];

        // Validar el formato del correo electrónico
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            echo "<p>El formato del correo electrónico es válido.</p>";
        } else {
            echo "<p>El formato del correo electrónico no es válido.</p>";
        }
    }
    ?>
</body>
</html>