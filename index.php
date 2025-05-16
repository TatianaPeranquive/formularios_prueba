<?php
interface iTemplate{
    public function a();    
}

interface iTemplateExtend extends iTemplate{
    public function b();
}

//Class a contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (iTemplate::a)
class a implements iTemplateExtend{
 public function b(){}
 public function a(){}

public function setVariable(object $user){}

}