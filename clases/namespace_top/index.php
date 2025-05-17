<?php

use Carpeta1\Humano; 
use Carpeta2\Humano as Humano2 ; // Forma2 para usar varios namespace 
require_once('Carpeta1\Humano.php');
require_once('Carpeta2\Humano.php');


$humano1 = new Humano;
$humano1->saludar();

$humano2 = new Carpeta2\Humano;
$humano2->saludar();