<?php
class Persona{
    public $nombre,  $edad , $apellido1, $apellido2;
    
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
        return $this;
    }

    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        return $this;
    }

    public function imprimirDatos(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido Materno: " . $this->apellido1 . "<br>";
        echo "Apellido Paterno: " . $this->apellido2 . "<br>";
    }

}

$persona = new Persona;

//--> concatenate the calls 

$persona->setNombre("Anggy")
        ->setApellido("Peranquive", "Gomez")
        ->imprimirDatos();

?>