<?php
class Persona{
    public $nombre,  $apellido,  $edad , $apellido1, $apellido2;
    
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() : string {
        return ucwords($this->nombre);
    }

    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }

    public function getApellido() {
        return $this->apellido1 . " " . $this->apellido2;
    }
}

class colombiano extends Persona{
    public $departamentos , $ciudad;

    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido2;
        $this->apellido2 = $apellido1;
    }
}

class chileno{
    public $comuna, $region;
}

?>