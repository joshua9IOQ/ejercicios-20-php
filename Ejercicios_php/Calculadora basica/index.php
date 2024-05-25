<?php
// Funciones para realizar las operaciones
function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Error: división por cero";
    }
}

// Obtener los valores ingresados por el usuario
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

// Realizar la operación correspondiente
$resultado = 0;

if ($operacion == 'suma') {
    $resultado = suma($num1, $num2);
} elseif ($operacion == 'resta') {
    $resultado = resta($num1, $num2);
} elseif ($operacion == 'multiplicacion') {
    $resultado = multiplicacion($num1, $num2);
} elseif ($operacion == 'division') {
    $resultado = division($num1, $num2);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>

    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required>

        <label for="operacion">Operación:</label>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <?php if ($resultado != 0) { ?>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php } ?>
</body>
</html>