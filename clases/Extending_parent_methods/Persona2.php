<?php
class Persona2{
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

class colombiano extends Persona2{
    public $departamentos , $ciudad;

    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido2;
        $this->apellido2 = $apellido1;
    }
}

class chileno extends Persona2{
    public $comuna, $region;
    public function setApellido($apellido1, $apellido2) {
    parent::setApellido($apellido1, $apellido2);
    echo "El apellido del usuario es: ";
    }   
    
}

?>