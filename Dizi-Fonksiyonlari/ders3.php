<pre style="font-size: 35px;">
   <?php
   error_reporting(E_ALL);

   $array = ['Şahin','Ahmet','Mehmet','Mustafa'];
   array_shift($array);//dizinin başlangıç değerini kaldırır bir elemanı çıkartır yani
   array_pop($array);//dizinin sonundaki değeri kaldırır elemanı yok ediyor
   $newArray= array_slice($array,0,3);//bir dizinin belirlediğin bölümünü döndürür
   print_r($newArray);
   print_r($array);
   $sayilar = range(1,5);
   print_r(array_sum($sayilar));//bir dizideki elemanların değerinin toplamını getirir
   print_r(array_product($sayilar));
   var_dump(in_array('Ahmet',$array));//bir dizide bir değerin varlığını araştırır

   $dizi = ['Ahmet', 'Mehmet', 'Şahin', 'Mustafa'];

   array_push($dizi,'Kemal');//dizinin sonuna yeni eleman ekliyor
   array_unshift($dizi, 'Ali');//dizinin başına yeni elemanı ekliyor
   print_r($dizi);
   print_r(array_keys($dizi));//dizideki bütün anahtar ve keyleri döndürüyor

   ?>
</pre>