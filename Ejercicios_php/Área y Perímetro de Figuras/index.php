<!DOCTYPE html>
<html>
<head>
    <title>Área y Perímetro de Figuras</title>
</head>
<body>
    <h1>Área y Perímetro de Figuras</h1>
    <form method="POST" action="">
        <label for="radio">Radio del círculo:</label>
        <input type="number" name="radio" id="radio" required>
        <br><br>
        <label for="lado">Lado del cuadrado:</label>
        <input type="number" name="lado" id="lado" required>
        <br><br>
        <label for="base">Base del rectángulo:</label>
        <input type="number" name="base" id="base" required>
        <br><br>
        <label for="altura">Altura del rectángulo:</label>
        <input type="number" name="altura" id="altura" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radio = $_POST["radio"];
        $lado = $_POST["lado"];
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        // Calcular el área y el perímetro del círculo
        $areaCirculo = pi() * pow($radio, 2);
        $perimetroCirculo = 2 * pi() * $radio;

        // Calcular el área y el perímetro del cuadrado
        $areaCuadrado = pow($lado, 2);
        $perimetroCuadrado = 4 * $lado;

        // Calcular el área y el perímetro del rectángulo
        $areaRectangulo = $base * $altura;
        $perimetroRectangulo = 2 * ($base + $altura);

        // Mostrar los resultados
        echo "<h2>Resultados:</h2>";
        echo "<p>Área del círculo: " . $areaCirculo . "</p>";
        echo "<p>Perímetro del círculo: " . $perimetroCirculo . "</p>";
        echo "<br>";
        echo "<p>Área del cuadrado: " . $areaCuadrado . "</p>";
        echo "<p>Perímetro del cuadrado: " . $perimetroCuadrado . "</p>";
        echo "<br>";
        echo "<p>Área del rectángulo: " . $areaRectangulo . "</p>";
        echo "<p>Perímetro del rectángulo: " . $perimetroRectangulo . "</p>";
    }
    ?>
</body>
</html>