<?php

use Carpeta1\Humano; 
use Carpeta2\Humano as Humano2 ; 

 //echo str_replace('\\' , '/', $clase) . '.php'; // Carpeta1\Humano; sea remplazado por -->  Carpeta1\Humano
spl_autoload_register(function($clase){
require_once(str_replace('\\' , '/', $clase). '.php' );
});

//require_once('Carpeta1\Humano.php');
//require_once('Carpeta2\Humano.php');


$humano1 = new Carpeta1\Humano;
$humano1->saludar();

$humano2 = new Humano2;
$humano2->saludar();
