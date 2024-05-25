<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="POST" action="">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" step="0.01" required>
        <br><br>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" id="altura" step="0.01" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        // Calcular el IMC
        $imc = $peso / ($altura * $altura);

        // Mostrar el resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>Su Índice de Masa Corporal (IMC) es: " . number_format($imc, 2) . "</p>";
    }
    ?>
</body>
</html>
