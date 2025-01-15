<?php

abstract class Sekil {
    abstract public function alanHesapla();
    abstract public function cevreHesapla();
}

class Kare extends Sekil {
    private $kenar;

    public function __construct($kenar) {
        $this->kenar = $kenar;
    }

    public function alanHesapla() {
        return $this->kenar * $this->kenar;
    }

    public function cevreHesapla() {
        return 4 * $this->kenar;
    }
}

class Dikdortgen extends Sekil {
    private $genislik;
    private $yukseklik;

    public function __construct($genislik, $yukseklik) {
        $this->genislik = $genislik;
        $this->yukseklik = $yukseklik;
    }

    public function alanHesapla() {
        return $this->genislik * $this->yukseklik;
    }

    public function cevreHesapla() {
        return 2 * ($this->genislik + $this->yukseklik);
    }
}

class Ucgen extends Sekil {
    private $taban;
    private $yukseklik;
    private $kenar1;
    private $kenar2;
    private $kenar3;

    public function __construct($taban, $yukseklik, $kenar1, $kenar2, $kenar3) {
        $this->taban = $taban;
        $this->yukseklik = $yukseklik;
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }

    public function alanHesapla() {
        return ($this->taban * $this->yukseklik) / 2;
    }

    public function cevreHesapla() {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
}

$kare = new Kare(4);
echo "Kare Alanı: " . $kare->alanHesapla() . "<br>";
echo "Kare Çevresi: " . $kare->cevreHesapla() . "<br>";

$dikdortgen = new Dikdortgen(3, 5);
echo "Dikdörtgen Alanı: " . $dikdortgen->alanHesapla() . "<br>";
echo "Dikdörtgen Çevresi: " . $dikdortgen->cevreHesapla() . "<br>";

$ucgen = new Ucgen(6, 4, 5, 6, 7);
echo "Üçgen Alanı: " . $ucgen->alanHesapla() . "<br>";
echo "Üçgen Çevresi: " . $ucgen->cevreHesapla() . "<br>";

?>
