<?php

$a = 3; $b = 4;

echo $a == $b; // ifadelerin birbirine eşit olup olmadığını karşılaştırıyor
echo $a === $b; //  ifadelerin aynı olup olmadığını karşılaştırıyor
echo $a != $b; //  eşit değildir
echo $a !== $b; // farklıdır.
echo $a < $b; // a küçüktür b
echo $a > $b; // a büyük b
echo $a <= $b; // a küçük veya eşit b
echo $a >= $b; // a büyük veya eşit b
echo $a <=> $b; // Sonuç: -1 Mekik 3 durumuda karşılaştırıyor.

//falseler yazılmıyor bu arada sadece true ise 1 yazıyor :)


$c = 1;
$d = 0;
echo "<br>";
echo $c <=> $d;
//eşit olunca 0 değeri döndürüyor
// a büyükse 1 döndürüyor
// a küçükse -1 döndürüyor