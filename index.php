<?php
interface iTemplate{
    public function a();    
}

interface iTemplateExtend {
    public function b();
}

interface iTemplateExtend2 extends iTemplate, iTemplateExtend{
    public function c();
}

//Fatal error: Class implementInterfaces contains 1 abstract method 
//and must therefore be declared abstract or implement the remaining methods (iTemplateExtend2::c)
class implementInterfaces implements iTemplateExtend2{
  public function a(){}
  public function b(){}
  public function c(){}

}