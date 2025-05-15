<?php
require_once('clases/Persona.php');

$chileno = new chileno;
$chileno->setApellido("Peranquive", "Gomez");
var_dump($chileno->getApellido());
?>