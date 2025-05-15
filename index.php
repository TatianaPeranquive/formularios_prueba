<?php
require_once('clases/Persona.php');
// create an object
$persona = new Persona;

$persona->nombre = "anGGy";
$persona->apellido = "Peranquive";
$persona->edad = 29;


var_dump($persona->getNombre($persona->nombre));
?>