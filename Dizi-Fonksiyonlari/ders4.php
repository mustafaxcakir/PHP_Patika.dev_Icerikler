<pre style="font-size: 20px;">
    <?php
    //$dizi = ['bir'=>'Araba', 'iki'=>'Bisiklet','üç'=>'Uçak','dört'=>'Kamyon'];
   /* echo current($dizi);//bir dizideki geçerli öğeyi döndürür
    echo next($dizi);//bir dizideki dahili işaretçisini ilerletir
    echo prev($dizi);//bir dizideki dahili işaretçisini geri götürür
    echo end($dizi);//dizideki en son elemanı getirir
    echo reset($dizi);//ilk elemana tekrar götürüyor
   */

   /* extract($dizi);//dizinin anahtarlarını değişken olarak kullanmamıza yarıyor
    echo $bir;
   */

    $dizi = [
        2 => 1,
        5 => 2,
        8 => 0,
        1 => 20,
    ];

    asort($dizi);//anahtarlarıyla ilişkisini bozmadan küçükten büyüge sıraladı
    print_r($dizi);
    arsort($dizi);//anahtarlarıyla ilişkisini bozmadan büyükte küçüge sıraladı
    print_r($dizi);

    ksort(($dizi)); // anahtarlarına göre küçükten büyüğe sıraladı
    print_r($dizi);

    krsort(($dizi)); // anahtarlarına göre büyükten küçüğe sıraladı
    print_r($dizi);

    ?>
</pre>