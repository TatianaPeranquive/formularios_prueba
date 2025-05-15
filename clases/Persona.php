<?php
class Persona{
    // attributes 
    public $nombre, $apellido, $edad;

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre($nombre) : string {
        return ucwords($this->nombre);
    }
}
?>