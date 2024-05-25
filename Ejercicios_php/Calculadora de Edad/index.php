<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Edad</title>
</head>
<body>
    <h1>Calculadora de Edad</h1>
    <form method="POST" action="">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fechaNacimiento = $_POST["fecha_nacimiento"];

        // Calcular la edad exacta
        $fechaActual = date("Y-m-d");
        $diff = date_diff(date_create($fechaNacimiento), date_create($fechaActual));
        $edadAnios = $diff->format("%y");
        $edadMeses = $diff->format("%m");
        $edadDias = $diff->format("%d");

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>Edad: " . $edadAnios . " años, " . $edadMeses . " meses, " . $edadDias . " días</p>";
    }
    ?>
</body>
</html>