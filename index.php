<?php
require_once('clases/Persona.php');
// create an object
$persona = new Persona;

$persona->nombre = "ANGGy";
$persona->apellido = "Peranquive";
$persona->edad = 29;

$persona->setNombre($persona->nombre);
var_dump($persona);
?>