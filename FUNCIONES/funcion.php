<?php

hi("hector");
hi("carlos");

#es funcion nos permitira imprimir un mensaje y concatenarlo
function hi($name){
    echo "Hola $name <br>";
}

echo add(11, 23);

# Esta funcion nos permite realizar una suma de dos valores y que el resultado sea de tipo Int
function add($a ,$b): int{
    $result = $a + $b;
    return $result;
}