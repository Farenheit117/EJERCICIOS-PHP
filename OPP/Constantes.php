<?php
// Definición de la clase Config
class Config {
    // 1. Definición de constantes de clase:
    // Las constantes se definen usando la palabra clave 'const' dentro de la clase.
    // Las constantes no pueden cambiar su valor una vez que son definidas.
    // Las constantes de clase están asociadas a la clase, no a las instancias de la clase.
    
    const DB_HOST = 'localhost'; // Dirección del servidor de la base de datos
    const DB_USER = 'root';      // Nombre de usuario para acceder a la base de datos
    const DB_PASS = 'password';  // Contraseña para acceder a la base de datos
}

// Acceso a las constantes de clase
// 2. Para acceder a una constante de clase, se utiliza la sintaxis: 'Clase::CONSTANTE'.
// No es necesario crear una instancia de la clase para acceder a las constantes.

echo Config::DB_HOST;  // Muestra: localhost
echo Config::DB_USER;  // Muestra: root
echo Config::DB_PASS;  // Muestra: password
?>