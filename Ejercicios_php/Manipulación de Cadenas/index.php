<!DOCTYPE html>
<html>
<head>
    <title>Manipulación de Cadenas</title>
</head>
<body>
    <h1>Manipulación de Cadenas</h1>
    <form method="POST" action="">
        <label for="cadena">Ingrese una cadena de texto:</label>
        <input type="text" name="cadena" id="cadena" required>
        <br><br>
        <input type="submit" value="Mostrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];

        // Mostrar la cadena en mayúsculas
        echo "<h2>Cadena en mayúsculas:</h2>";
        echo strtoupper($cadena);
        echo "<br><br>";

        // Mostrar la cadena en minúsculas
        echo "<h2>Cadena en minúsculas:</h2>";
        echo strtolower($cadena);
        echo "<br><br>";

        // Mostrar la cantidad de caracteres de la cadena
        echo "<h2>Cantidad de caracteres:</h2>";
        echo strlen($cadena);
    }
    ?>
</body>
</html>