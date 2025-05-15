<?php
class Myclass{
    private $private = "private";
    public $public = "public";
    protected $protected = "protected";

    function printHellow(){
        echo $this->public . "<br>";
        echo $this->private . "<br>";
        echo $this->protected . "<br>";
    }

}

$objeto = new Myclass;

echo $objeto->printHellow();

?>