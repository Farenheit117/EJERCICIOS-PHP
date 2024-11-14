<?php
//Request contiene datos como GET, POST Y COOKIE
if (isset($_REQUEST['nombre'])) {
    echo "Hola, " . htmlspecialchars($_REQUEST['nombre']);
}
?>