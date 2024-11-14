<?php

#Array de tipo asociativo
$array = [
    "nombre" => "carlos",
    "edad" => "37",
    "genero" => "Masculino"

];
# esta forma nos permite modificar el array por medio de la clave nombre
$array["nombre"] = "Andres";

echo $array["nombre"]; 