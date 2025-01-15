<?php
/*
 * foreach ($dizi as $deger) {
    // Döngü bloğu
}
 */

$dizi = [1, 2, 3, 4, 5];

foreach ($dizi as $deger) {
    echo $deger*$deger.  "<br>";
}

echo "<hr>";

$notlar = [
    "Math" => 85,
    "Science" => 90,
    "English" => 78,
];
$toplam = 0;
$ortalama = 0;

foreach ($notlar as $key => $value) {
    echo $key . " notu: " . $value . "<br>";
    $toplam += $value;
}

echo "Toplam: " . $toplam . "<br>";
echo "Ortalama:". $toplam/count($notlar);

echo "<hr>";
?>

<?php

// Örnek Dizi
$sayilar = [10, 20, 30, 40, 50];
$toplama = 0;
$ortalama = 0;

// Görevler:
// 1. Dizideki tüm elemanları ekrana yazdır.
// 2. Dizinin toplamını ve ortalamasını hesapla.
// 3. Dizideki en büyük ve en küçük sayıyı bul.

foreach ($sayilar as $sayi) {
    echo $sayi . "<br>";
    $toplama += $sayi;
}

echo "Toplam: " . $toplama . "<br>";
echo "Ortalama: " . $toplama/count($sayilar) . "<br>";

echo "<hr>";
?>

<?php

$ogrenciler = [
    ["isim" => "Ahmet", "yas" => 18, "not" => 85],
    ["isim" => "Mehmet", "yas" => 19, "not" => 90],
    ["isim" => "Ali", "yas" => 20, "not" => 78],
];
$enyukseknot = 0;

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci["isim"] . " " . $ogrenci["yas"] . " " . $ogrenci["not"] . "<br>";
    if ($ogrenci["not"] > $enyukseknot) {
        $enyukseknot = $ogrenci["not"];
    }
}


echo "En yüksek not: " . $enyukseknot;

?>
