<?php 

class Humano{

    public static $nombre = "Anggy PG";
    public static function saludar(){
        echo "Holis";
    }
}

Humano::saludar();
echo Humano::$nombre;
?>