<?php
function generarContrasena($longitud) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';
    $contrasena = '';
    $max = strlen($caracteres) - 1;
    for ($i = 0; $i < $longitud; $i++) {
        $contrasena .= $caracteres[mt_rand(0, $max)];
    }
    return $contrasena;
}

$longitud = 12; // Longitud predeterminada
if (isset($_POST['longitud'])) {
    $longitud = $_POST['longitud'];
}

$nuevaContrasena = generarContrasena($longitud);
echo "Tu nueva contraseña aleatoria es: " . $nuevaContrasena;
?>