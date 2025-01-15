<?php

//Abstract Sınıf: Soyut bir sınıf, nesne oluşturulamaz. Diğer sınıfların türemesi için bir şablon sağlar.
//Abstract Sınıf: Soyut bir sınıf, nesne oluşturulamaz. Diğer sınıfların türemesi için bir şablon sağlar.
abstract class Urun{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle(){
        echo 'Urun Adi:' . $this->urunAdi . '<br>';
        echo 'Urun Fiyat:' . $this->urunFiyat . '<br>';
        echo 'Urun Vergi:' . $this->urunVergi . '<br>';
    }

}

class Icecek extends Urun{

    public function urunAdi($urunAdi){
        $this->urunAdi = $urunAdi;
    }
    public function urunFiyat($urunFiyat){
        $this->urunFiyat = $urunFiyat;
    }
    public function urunVergi($urunVergi){
        $this->urunVergi = $urunVergi;
    }
}

$icecek = new Icecek();

$icecek->urunAdi('Kahve');
$icecek->urunFiyat(2);
$icecek->urunVergi(1);

$icecek->urunEkle();