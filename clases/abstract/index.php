<?php

abstract class ClassAbsstractaBase{
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this->getValor();
    }

}

class ClassConcreta extends ClassAbsstractaBase{
    protected function getValor(){ 
        return "protected function from clase concreta";
    }
    public function valorPrefijo($prefijo, $separador = " #&$ "){
        return  "<br>".$prefijo." hola".$separador;
    }
}

$clase1 = new ClassConcreta;

$clase1->imprimir();

echo $clase1->valorPrefijo("prefijito");