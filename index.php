<?php
interface iTemplate{
    public function getHTML();
    public function setVariable(object $user);
}

//Class MyClass contains 2 abstract methods and must therefore be declared abstract 
//or implement the remaining methods (iTemplate::getHTML, iTemplate::setVariable) 

class MyClass implements iTemplate{
 public function getHTML(){}
public function setVariable(object $user){}

}