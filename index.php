<?php
require_once('clases/Persona.php');
// create an object
$persona = new Persona("anGGy","peranquive",29);

$persona->setNombre("tatis");

// $persona->nombre = "anGGy";
// $persona->apellido = "Peranquive";
// $persona->edad = 29;


var_dump($persona->getNombre());
?>