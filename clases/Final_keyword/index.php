<?php
final class Hogar{
    public $color, $seguridad;   
    
    public function pintar(){
        echo "con blanco";
    }
}

// Fatal error: Class Departamento cannot extend final class Hogar
class Departamento extends Hogar{
    
}


?>
