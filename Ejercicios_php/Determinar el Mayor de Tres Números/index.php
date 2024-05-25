<!DOCTYPE html>
<html>
<head>
    <title>Mayor de Tres Números</title>
</head>
<body>
    <h1>Mayor de Tres Números</h1>

    <form method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" id="num3" required><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        if ($num1 >= $num2 && $num1 >= $num3) {
            echo "<p>El número mayor es: $num1</p>";
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo "<p>El número mayor es: $num2</p>";
        } else {
            echo "<p>El número mayor es: $num3</p>";
        }
    }
    ?>
</body>
</html>