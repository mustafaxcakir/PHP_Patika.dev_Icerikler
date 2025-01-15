<?php

/*function say($sayi)
{
    static $sayi;
    echo $sayi;
    $sayi++;
}

say(1);
say(1);
say(1);
say(1);
*/

class User{
    public static $isim;
    public $soyisim;
    public static function setIsim($isim){
        self::$isim = $isim; //burada self kullanıyoruz $this kullanmıyoruz.
    }
}

/*User::$isim = "Mustafa";

echo User::$isim;*/

