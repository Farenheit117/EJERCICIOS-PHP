<?php
// Verifica si el parámetro 'nombre' está presente en la solicitud GET y no está vacío.
if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {

    // Asigna el valor del parámetro 'nombre' a la variable $nombre.
    $nombre = $_GET['nombre'];

    // Muestra un saludo, asegurándose de que la salida sea segura usando htmlspecialchars().
    // htmlspecialchars() convierte caracteres especiales en entidades HTML para prevenir ataques XSS.
    echo "Hola, " . htmlspecialchars($nombre);
} else {
    // Mensaje en caso de que el parámetro 'nombre' no esté definido o esté vacío.
    echo "El parámetro 'nombre' no fue proporcionado o está vacío.";
}
?>