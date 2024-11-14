<?php
// Establece una cookie con el nombre 'usuario' y el valor 'Carlos'.
// La cookie expira en 1 hora (3600 segundos a partir del momento actual).
setcookie("usuario", "Carlos", time() + 3600); 

echo "Cookie establecida.<br>";

// Verifica si la cookie 'usuario' está definida antes de intentar acceder a ella.
if (isset($_COOKIE['usuario'])) {
    // Si la cookie existe, muestra un mensaje con su valor.
    echo "Hola de nuevo, " . $_COOKIE['usuario'];
} else {
    // Si la cookie no está disponible, muestra un mensaje de error.
    echo "No se encontró la cookie.";
}
?>