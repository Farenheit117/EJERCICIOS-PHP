<?php
#array de tipo indexado
echo" <br> Arreglo de tipo indexado con el ciclo foreach <br>";
$array = ["Hector","Carlos","Andres"];
# es una estructura de control repetiva ques bastane usada para arrays
foreach ($array as $i) {
    echo $i.",";
}
echo" <br> Arreglo de tipo asociativo con el ciclo foreach";
#array de tipo asociativo
$arreglo = [
    "nombre" => "carlos",
    "edad" => "37",
    "genero" => "Masculino"

];
# es una estructura de control repetiva ques bastane usada para arrays
foreach ($arreglo as $i) {
    echo "<br>".$i.";";
}