<?php


class islem{
    public $sayi1;
    public $sayi2;

    public $toplam;
    public $carp;
    public $cikar;
    public $bol;

    public function toplam(){
        return $this->sayi1 + $this->sayi2;
    }
    public function carp(){
        return $this->sayi1 * $this->sayi2;
    }

    public function cikar(){
        return $this->sayi1 - $this->sayi2;
    }

    public function bol(){
        return $this->sayi1 / $this->sayi2;
    }

}

$islem = new islem();

$islem->sayi1 = 10;
$islem->sayi2 = 5;

echo $islem->toplam();
echo $islem->carp();
echo $islem->cikar();
echo $islem->bol();