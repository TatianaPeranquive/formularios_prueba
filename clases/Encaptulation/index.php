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

class MyclassHija extends Myclass{
      public $publicHija = "publicHija";
    protected $protectedHija = "protectedHija";
    protected $privateHija = "privateHija";
    //accessing from overwriter method of children
    //result: Can be access to public and protected properties 
    // but not to private 
    function printHellow2(){
        
        echo $this->public . "<br>";
        echo $this->private . "<br>";
        echo $this->protected . "<br>";
    }

}


$objeto = new Myclass;

echo $objeto->printHellow();
//echo $objeto->public;
//echo $objeto->private; // Error: Cannot access private property Myclass::$private 
//echo $objeto->protected; // Error: Cannot access protected property Myclass::$protected
 echo $objeto->publicHija . "<br>";
 echo $objeto->protectedHija. "<br>";
 echo $objeto->privateHija. "<br>";


echo "<br>Pruebas con la hija <br> ";
$objeto2 = new MyclassHija;
echo "<br>Pruebas printeHellow la hija <br>";
echo $objeto2->printHellow(). "<br>";
 echo $objeto2->public. "<br>";
 echo $objeto2->publicHija. "<br>";
 echo $objeto2->protectedHija. "<br>";
 echo $objeto2->protected. "<br>";
 echo $objeto2->privateHija. "<br>";
 echo $objeto2->private. "<br>";

?>