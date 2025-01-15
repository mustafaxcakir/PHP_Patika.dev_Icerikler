<?php


class Bir {
    public function methodBir()
    {
        echo 'methodBir';
    }
}

class Iki extends Bir {
    public function methodIki(){
        echo 'methodIki';
    }
}

class Uc extends Iki {
    public function methodUc(){
        echo 'methodUc';
    }
}

$Uc = new Uc();
$Uc->methodBir();
$Uc->methodIki();
$Uc->methodUc();