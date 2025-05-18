<?php

$expresion = "//"; //--> caracteres no alfanumericos "/-*%";
$cadena = "Hola mundo como estás";

$expresion = "/mundooo/";

if (preg_match($expresion, $cadena)) {
    echo "la cadena cumple la condicion";
}else {
    echo "la cadena NOOOO cumple la condicion";
}
?>