<?php

/*
print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.
var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.
explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
implode();
Dizi elemanlarını birleştirip bir dizge elde eder.
count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
is_array();
Değişkenin bir dizi içerip içermediğine bakar
*/

$arr = [1,2,3,4,5,6,7,8,9];

/*print_r($arr);

print("<br>");

var_dump($arr);

print("<br>");

$dizge = implode("as",$arr);

print($dizge);

print("<br>");

$newArray = explode("as",$dizge);

print_r($newArray);

print_r("<br>");

echo count($arr);*/

/*for($i= 0; $i <= count($arr) -1; $i++) {
    echo $arr[$i];
}*/

echo is_array($arr);

?>