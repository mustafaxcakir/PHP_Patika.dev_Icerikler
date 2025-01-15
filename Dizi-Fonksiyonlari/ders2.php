<?php

echo"<pre>";

//$meyve = ['elma','armut','karpuz','elma','armut','karpuz','elma','armut','karpuz'];
//$harfler = ['a','b','c'];
//$sayilar = range(1,20); //dizi oluşturuyor başlangıç bitiş degerine göre
//print_r($sayilar);

//shuffle($sayilar); // diziyi karıştırıyor
//print_r($sayilar);

//$dizi = array_combine($meyve, $harfler); // iki diziyi birbirine atama yapıyor
//print_r($dizi);

//$dizi = array_count_values($meyve); // dizi içindeki elemanın kaç tane bulundugunu döndürüyor
//print_r($dizi);

//$dizi = array_flip($harfler); // bir dizideki anahtarlala değerlerin yerini değiştiriyor
//print_r($dizi);

//$dizi = array_key_exists(1,$harfler); //belirtilen anahtar veya indis dizide var mı diye kontrol ediyor
//print_r($harfler);

/*$dizi = array_map(function ($e) {
    return $e + 2 ;
}, $sayilar); //belirtilen dizinin elemanlarını geri çağırım işlevi yapar
print_r($dizi);*/

/*$dizi = array_filter($sayilar, function ($e) { //array içindeki elemanları filtrelemeye yarıyor
    return $e % 2 == 0;
});
print_r($dizi);*/

/*$sayi1 = range(1,20);
$sayi2 = range(10,20);

$tek = array_merge($sayi1,$sayi2); // iki diziyi birbirine eklemeye yarıyor
print_r($tek);*/

/*$dizi = ['elma','armut','karpuz','muz'];
print_r(array_rand($dizi, 2)); // rastgele key gönderiyor diziden*/

/*$dizi = ['elma','armut','karpuz','muz'];
$arr = array_reverse($dizi);// diziyi terse çevirip gönderiyor
print_r($arr);*/

/*$dizi = ['elma','armut','karpuz','muz'];
$arr = array_search('muz', $dizi);//dizideki belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür
print_r($arr);*/

?>