<?php

interface A{

    public function a();
    public function b();

}

interface B
{
    public function c();
    public function d();

}

class C implements A,B{

    public function a(){}
    public function b(){}
    public function c(){}
    public function d(){}

}