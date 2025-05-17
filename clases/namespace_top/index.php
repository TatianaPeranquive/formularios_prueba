<?php

use Carpeta1\Humano; // forma1 para insstanciar el objeto Humano sin nombrar el namespace antes
require_once('Carpeta1\Humano.php');
require_once('Carpeta2\Humano.php');


$humano1 = new Humano;
$humano1->saludar();

$humano2 = new Carpeta2\Humano;
$humano2->saludar();