<!DOCTYPE html>
<html>
<head>
    <title>Convertidor de Temperaturas</title>
</head>
<body>
    <h1>Convertidor de Temperaturas</h1>

    <form method="POST">
        <label for="temperatura">Temperatura:</label>
        <input type="text" name="temperatura" id="temperatura" required>

        <label for="escala_origen">Escala Origen:</label>
        <select name="escala_origen" id="escala_origen" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>

        <label for="escala_destino">Escala Destino:</label>
        <select name="escala_destino" id="escala_destino" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>

        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $temperatura = $_POST["temperatura"];
        $escala_origen = $_POST["escala_origen"];
        $escala_destino = $_POST["escala_destino"];

        // Realizar la conversión
        $temperatura_convertida = 0;

        if ($escala_origen == "celsius" && $escala_destino == "fahrenheit") {
            $temperatura_convertida = ($temperatura * 9/5) + 32;
        } elseif ($escala_origen == "fahrenheit" && $escala_destino == "celsius") {
            $temperatura_convertida = ($temperatura - 32) * 5/9;
        }

        // Mostrar el resultado
        echo "<p>$temperatura grados $escala_origen son equivalentes a $temperatura_convertida grados $escala_destino.</p>";
    }
    ?>
</body>
</html>