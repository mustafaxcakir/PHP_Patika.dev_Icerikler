<?php

$ogrenciler = [
    "ogrenci_1" => array("isim" => "Ahmet", "yasi" => 18),
    "ogrenci_2" => array("isim" => "Mehmet", "yasi" => 23),
    "ogrenci_3" => array("isim" => "Ali", "yasi" => 15),

];

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci["isim"] . " " . $ogrenci["yasi"] . "<br>";
}
?>
