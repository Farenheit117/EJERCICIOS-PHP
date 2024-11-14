<?php

$array  =  [
    "Andrea",
    "Carlos",
    "Sofia"
];
$array2 =[
    "carro",
    "moto",
    "avion"
];

//esta funcion nos permite mezclar o fusionar dos arrays
$arraysMixed = array_merge($array, $array2);
print_r($arraysMixed);

#esta funcion nos permite saber cuantos elementos hay en el arreglo
echo count ($array);
echo "<br>";

//nos permite agregar un nuevo elemento al array el parte de atras
array_push( $array,"Camilo");

// esta funcion saca o elimina  el ulmino elemento agregado al momento de imprimir.
$elemento_rm =  array_pop( $array );
//esta funcion nos muestra  la posicion de cada elemente del array
print_r($array);

//imprime el elemento sacado o eliminado del array
echo  "<br>".$elemento_rm;

// CON ESTA FUNCION COMPROBAMOS SI EXITE DICHO ELEMENTO EN EL ARRAY
if (in_array("Carlos", $array)){
    echo "<br>"."Existe";
}