<!DOCTYPE html>
<html>
<head>
    <title>Inversor de Cadena</title>
</head>
<body>
    <h1>Inversor de Cadena</h1>

    <form method="POST">
        <label for="cadena">Cadena de Texto:</label>
        <input type="text" name="cadena" id="cadena" required>
        <input type="submit" value="Invertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la cadena de texto del formulario
        $cadena = $_POST["cadena"];

        // Invertir la cadena
        $cadena_invertida = strrev($cadena);

        // Mostrar la cadena invertida
        echo "<p>La cadena invertida es: $cadena_invertida</p>";
    }
    ?>
</body>
</html>
