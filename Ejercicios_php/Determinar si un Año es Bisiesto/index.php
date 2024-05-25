
<!DOCTYPE html>
<html>
<head>
    <title>Comprobar Año Bisiesto</title>
</head>
<body>
    <h1>Comprobar Año Bisiesto</h1>

    <form method="POST">
        <label for="year">Año:</label>
        <input type="text" name="year" id="year" required>
        <input type="submit" value="Comprobar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el valor del año del formulario
        $year = $_POST["year"];

        // Determinar si el año es bisiesto
        $esBisiesto = false;

        if ($year % 4 == 0) {
            if ($year % 100 != 0 || $year % 400 == 0) {
                $esBisiesto = true;
            }
        }

        // Mostrar el resultado
        if ($esBisiesto) {
            echo "<p>El año $year es bisiesto.</p>";
        } else {
            echo "<p>El año $year no es bisiesto.</p>";
        }
    }
    ?>
</body>
</html>