<?php
// Definición de la función de autocarga
function mi_autocargador($nombreClase) {
    // 1. Definir la ubicación de las clases a cargar.
    // El nombre de la clase se recibe como parámetro en $nombreClase.
    // En este caso, asumimos que las clases se encuentran en el directorio 'clases/'.
    // Concatenamos el nombre de la clase con la extensión '.php' para formar la ruta completa del archivo.
    $archivo = 'clases/' . $nombreClase . '.php';

    // 2. Verifica si el archivo existe en la ubicación definida.
    // La función file_exists() comprueba si el archivo con el nombre correspondiente realmente existe.
    if (file_exists($archivo)) {
        // 3. Si el archivo existe, se incluye en el script usando require_once.
        // require_once asegura que el archivo se incluya solo una vez, evitando duplicados.
        require_once $archivo;
    } else {
        // Si el archivo no existe, puedes manejar el error aquí si lo deseas.
        // En este ejemplo no se maneja el error, pero sería útil agregar un mensaje o registro.
        echo "No se pudo cargar la clase: $nombreClase. El archivo no existe.";
    }
}

// Registrar la función de autocarga con spl_autoload_register.
// La función spl_autoload_register permite que la función 'mi_autocargador' se ejecute 
// automáticamente cuando se intente crear una instancia de una clase que no se haya cargado previamente.
spl_autoload_register('mi_autocargador');
?>