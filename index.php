<?php
require_once('clases/Persona.php');

$colombiano = new colombiano;
$colombiano->setApellido("Peranquive", "Gomez");
var_dump($colombiano->getApellido());
?>