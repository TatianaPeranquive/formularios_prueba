<?php 

class Humano{

    public static $nombre = "Anggy PG"; // ---> le pertenece unicamente a esta clase, no se le pasa al objeto 
    public static function saludar(){
        echo "Holis";
    }
    public function saludoPersonalizado(){
        echo "Señorita " . self::$nombre; // --> this hace referencia a la propiedad del objeeto instanciado
                                                // Si uso $this->nombre sale el error:
                                                //Notice: Accessing static property Humano::$nombre as non static
                                                //Warning: Undefined property: Humano::$nombre 
    }
}
$humano = new Humano;
$humano->saludoPersonalizado();

?>