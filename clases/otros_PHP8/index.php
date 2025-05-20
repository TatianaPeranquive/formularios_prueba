<?php
class PostsController
{
    public function __construct(public $nombre = null) {
        $this->nombre = $nombre;
    }

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre)."_set";
        return $this;
    }

    public function getNombre() : string {
    return ucwords($this->nombre)."_get";
    }
}
//$name = "ANGGY";
$name = Null;

//NULLSAFE (The test applies to the object (null/object))
//It is used to avoid errors if an object is null when trying to call a method on it.

//$data = NULL; //If the left part is null, return the right part:after
$data = new PostsController($name ); // Since the object is valid, method calls return the object:string(8) "_set_get"
//var_dump($data->setNombre($name));
//var_dump $data->getNombre());
var_dump($data?->setNombre($name)?->getNombre() ?? '' . "after");


?>