<!DOCTYPE html>
<html>
<head>
    <title>Contador de Caracteres</title>
</head>
<body>
    <h1>Contador de Caracteres</h1>
    <form method="POST" action="">
        <label for="texto">Texto:</label>
        <textarea name="texto" id="texto" rows="4" cols="50" required></textarea>
        <br><br>
        <input type="submit" value="Contar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];

        // Eliminar los espacios en blanco del texto
        $textoSinEspacios = str_replace(' ', '', $texto);

        // Contar los caracteres
        $cantidadCaracteres = strlen($textoSinEspacios);

        // Mostrar el resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>El texto ingresado tiene " . $cantidadCaracteres . " caracteres (excluyendo los espacios en blanco).</p>";
    }
    ?>
</body>
</html>