<!DOCTYPE html>
<html>
<head>
    <title>Validación de Formulario</title>
    <script>
        function validarEdad() {
            var edad = document.getElementById("edad").value;
            
            if (edad >= 18) {
                alert("Eres mayor de edad");
            } else {
                alert("Eres menor de edad");
            }
        }
    </script>
</head>
<body>
    <h1>Validación de Edad</h1>
    <form>
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" id="edad" name="edad" required>
        <br><br>
        <input type="button" value="Validar" onclick="validarEdad()">
    </form>
</body>
</html>