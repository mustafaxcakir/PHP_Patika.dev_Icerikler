<?php
/*
for (başlangıç; koşul; artış/azalış) {
    // Tekrar edecek kodlar
}
*/

// 1'den 100'e kadar olan tek sayıları yazdırma
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

echo "<br>";

// Dizideki elemanların toplamını hesaplama
$dizi = [10, 20, 30, 40, 50];
$toplam = 0;

for ($i = 0; $i < count($dizi); $i++) {
    $toplam += $dizi[$i];
}

echo "Dizinin toplamı: " . $toplam . "<br>";

echo "<br>";

// 10'dan geriye doğru 5'er azalma
for ($i = 10; $i >= -10; $i -= 5) {
    echo $i . "<br>";
}

?>
