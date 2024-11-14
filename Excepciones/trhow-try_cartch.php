<?php
function dividir($a, $b) {
    if ($b == 0) {
        //TROW
        throw new Exception("No se puede dividir por cero");
    }
    return $a / $b;
}
//TRY CATCH
try {
    $resultado = dividir(10, 0);
    echo "Resultado: $resultado";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "Bloque finally ejecutado";
}