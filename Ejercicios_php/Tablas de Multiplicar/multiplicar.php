<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <form method="POST">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Generar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número del formulario
        $numero = $_POST["numero"];

        // Generar la tabla de multiplicar
        echo "<h2>Tabla de Multiplicar del $numero</h2>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i = </td><td>$resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
