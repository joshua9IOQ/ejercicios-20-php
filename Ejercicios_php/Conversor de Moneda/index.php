<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moneda</title>
</head>
<body>
    <h1>Conversor de Moneda</h1>

    <form method="POST">
        <label for="cantidad">Cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" required>

        <label for="moneda_origen">Moneda Origen:</label>
        <select name="moneda_origen" id="moneda_origen" required>
            <option value="USD">Dólares</option>
            <option value="EUR">Euros</option>
            <!-- Agrega más opciones de monedas según tus necesidades -->
        </select>

        <label for="moneda_destino">Moneda Destino:</label>
        <select name="moneda_destino" id="moneda_destino" required>
            <option value="USD">Dólares</option>
            <option value="EUR">Euros</option>
            <!-- Agrega más opciones de monedas según tus necesidades -->
        </select>

        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $cantidad = $_POST["cantidad"];
        $moneda_origen = $_POST["moneda_origen"];
        $moneda_destino = $_POST["moneda_destino"];

        // Definir la tasa de cambio fija
        $tasa_cambio = 0.85; // Ejemplo: 1 dólar = 0.85 euros

        // Realizar la conversión
        $cantidad_convertida = $cantidad * $tasa_cambio;

        // Mostrar el resultado
        echo "<p>$cantidad $moneda_origen son equivalentes a $cantidad_convertida $moneda_destino.</p>";
    }
    ?>
</body>
</html>
