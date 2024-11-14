<?php

#array de tipo multimencional
$arreglo = [[
    "nombre" => "carlos",
    "edad" => "37",
    "genero" => "Masculino"
    ],
    [
    "nombre" => "Andres",
    "edad"=> "24",
    "genero"=> "Masculino"
    ]
    
    ];
# nos permite imprimer un valor por su posicion y clave
echo $arreglo[1]["nombre"];
echo "<br>";

# nos permite imprimer todo incluyendo la clave dsel array por medio ciclo foreach
foreach ($arreglo as $array) {
    foreach ($array as $key => $value) {
        echo $key. ": " .$value."<br>";
    }
}