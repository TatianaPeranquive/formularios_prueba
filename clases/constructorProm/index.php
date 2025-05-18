<?php
class Persona{
   // public $nombre,  $edad , $apellido1, $apellido2; // --> PHP 7    
   // public function __construct($nombre,  $apellido1, $apellido2) { // --> PHP7

   public function __construct(public $nombre,  public $apellido1, public $apellido2) { 
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    } 
    
    
    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
        return $this; //--> usefull when you want concatenate the calls
    }

    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        return $this; //--> usefull when you want concatenate the calls
    }

    public function imprimirDatos(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido Materno: " . $this->apellido1 . "<br>";
        echo "Apellido Paterno: " . $this->apellido2 . "<br>";
    }

}

$persona = new Persona("Anggy", "Peranquive", "Gomez");

//--> concatenate the calls 
$persona->setNombre("Anggy")
        ->setApellido("Peranquive", "Gomez")
        ->imprimirDatos();

?>