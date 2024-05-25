<!DOCTYPE html>
<html>
<head>
    <title>Palabras Prohibidas</title>
</head>
<body>
    <h1>Palabras Prohibidas</h1>

    <form method="POST">
        <label for="texto">Texto:</label>
        <textarea name="texto" id="texto" required></textarea>

        <label for="prohibidas">Palabras Prohibidas (separadas por comas):</label>
        <input type="text" name="prohibidas" id="prohibidas" required>

        <input type="submit" value="Reemplazar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el texto y las palabras prohibidas del formulario
        $texto = $_POST["texto"];
        $prohibidas = $_POST["prohibidas"];

        // Convertir las palabras prohibidas en un array
        $palabras_prohibidas = explode(",", $prohibidas);

        // Reemplazar las palabras prohibidas por asteriscos
        foreach ($palabras_prohibidas as $palabra) {
            $texto = str_ireplace(trim($palabra), "***", $texto);
        }

        // Mostrar el texto con las palabras prohibidas reemplazadas
        echo "<p>$texto</p>";
    }
    ?>
</body>
</html>