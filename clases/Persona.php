<?php
class Persona{
    // attributes 
    public $nombre, $apellido, $edad;

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }
}
?>