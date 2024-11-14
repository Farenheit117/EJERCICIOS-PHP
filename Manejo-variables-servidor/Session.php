<?php
// Bloque para iniciar sesión en `inicio.php`

// session_start() se usa para iniciar una nueva sesión o reanudar una existente.
// Esto es necesario antes de poder acceder o modificar cualquier variable de sesión.
session_start();

// Se establece una variable de sesión con el nombre 'usuario'.
$_SESSION['usuario'] = 'Carlos';

echo "Sesión iniciada";

// -------------------------------------------------------------------

// Bloque para comprobar el acceso a la sesión en `perfil.php`

// Inicia o reanuda la sesión.
session_start();

// Verifica si la variable de sesión 'usuario' está definida.
// isset() se utiliza para comprobar si la sesión se ha establecido previamente.
if (isset($_SESSION['usuario'])) {
    // Si la sesión está activa, muestra un mensaje de bienvenida.
    echo "Bienvenido, " . $_SESSION['usuario'];
} else {
    // Si no hay sesión activa, muestra un mensaje de error.
    echo "No hay sesión iniciada.";
}
?>