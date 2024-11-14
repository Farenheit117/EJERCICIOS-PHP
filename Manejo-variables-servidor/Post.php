
<?php
// Verifica si el método de solicitud es POST
// $_SERVER["REQUEST_METHOD"] almacena el método HTTP utilizado para acceder a la página.
// En este caso, nos aseguramos de que el formulario fue enviado usando el método POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtiene el valor del campo 'nombre' enviado por el formulario a través del método POST.
    // $_POST es un arreglo asociativo que contiene los datos enviados por POST.
    $nombre = $_POST['nombre'];
    
    // Muestra un saludo personalizado con el nombre ingresado por el usuario.
    // La función htmlspecialchars() se utiliza para prevenir ataques XSS 
    // (Cross-Site Scripting), convirtiendo caracteres especiales en su representación HTML segura.
    echo "Hola, " . htmlspecialchars($nombre);
}