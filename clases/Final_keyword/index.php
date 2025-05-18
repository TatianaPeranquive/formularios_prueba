
<?php
class Hogar{
    public $color, $seguridad;   
    //Cannot override final method Hogar::pintar(
    final public function pintar(){
        echo "con blanco";
    }
}

class Departamento extends Hogar{
    public function pintar(){
        echo "con rojo";
    }
}

$departamento = new Departamento;
$departamento->pintar();


?>
