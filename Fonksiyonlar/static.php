<?php

/*function say(){
    static $sayi = 0;
    echo $sayi;
    $sayi++;
}

say();
say();
say();
say();
say();*/

function faktoriyel($sayi) {
    static $sonuclar = []; // Önceki hesaplamaları saklamak için static dizi

    if (isset($sonuclar[$sayi])) {
        return $sonuclar[$sayi]; // Önceden hesaplanmışsa sonucu döndür
    }

    if ($sayi <= 1) {
        return 1;
    }

    $sonuc = $sayi * faktoriyel($sayi - 1);
    $sonuclar[$sayi] = $sonuc; // Hesaplanan sonucu kaydet
    return $sonuc;
}

echo faktoriyel(5); // 120


?>