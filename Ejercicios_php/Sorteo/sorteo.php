<!DOCTYPE html>
<html>
<head>
    <title>Sorteo</title>
</head>
<body>
    <h1>Sorteo</h1>

    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Participar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el nombre del usuario del formulario
        $nombre = $_POST["nombre"];

        // Generar un número aleatorio para determinar si el usuario ha ganado o no
        $ganador = rand(0, 1);

        // Mostrar el resultado del sorteo
        if ($ganador) {
            echo "<p>Felicidades, $nombre, ¡has ganado!</p>";
        } else {
            echo "<p>Lo siento, $nombre, no has ganado en esta ocasión.</p>";
        }
    }
    ?>
</body>
</html>