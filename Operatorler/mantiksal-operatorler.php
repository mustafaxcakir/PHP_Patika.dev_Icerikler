<?php

/*
&& ve:  Her iki ifade de doğruysa true döner.

|| veya: İki ifadeden biri doğruysa (true), sonuç true olur

! değilse
*/

$a = true;
$b = true;

$c = true;
$d = false;

$e = false;

$f = false;

$isLoggedIn = true;
$isAdmin = false;

        if($a && $b){
        echo "Her iki ifade de doğru!";
        }else {
            echo "İfadelerden birisi doğru birisi yanlış ise";
        }

        echo "<br>";

        if($c || $d){
            echo "En az bir ifade doğru ise!";
        }else{
            echo "İfadelerden ikiside yanlış demek!";
        }

        echo "<br>";

        if(!$e){
            echo "İfade yanlış!";
        }else {
            echo "İfade doğru!";
        }

        echo "<br>";

        if ($isLoggedIn && $isAdmin) {
            echo "Hoşgeldiniz, Admin!";
        }else {
            echo "Yetkiniz yok!";
        }

        ?>
<?php

/*ÖDEV: Kullanıcı Yetkilendirme ve Yaş Kontrolü
Bir web sitesinde, kullanıcının belirli bir içeriğe erişip erişemeyeceğini kontrol eden bir sistem yaz.

Senaryo:
Kullanıcının sisteme giriş yapıp yapmadığını kontrol et ($isLoggedIn).
Kullanıcının 18 yaşından büyük olup olmadığını kontrol et ($age).
Kullanıcı admin ise her yaşta erişim izni ver ($isAdmin).
Kullanıcı giriş yapmamışsa veya 18 yaşından küçükse, uygun bir mesaj göster.
Mantıksal operatörleri kullanarak bu kontrolleri birleştir.
İpucu:
Inputlar:
$isLoggedIn (boolean): Kullanıcı giriş yapmış mı? true veya false
$age (integer): Kullanıcının yaşı
$isAdmin (boolean): Kullanıcı admin mi? true veya false
*/

echo "<br>";
echo "<br>";

$isLoggedIn = true;
$age = 20;
$isAdmin = false;

if ($isAdmin) {
    echo "Admin erişimi sağlandı!";
} elseif ($isLoggedIn && $age >= 18) {
    echo "Erişim izni verildi!";
} elseif (!$isLoggedIn) {
    echo "Giriş yapılmamış!";
} elseif ($isLoggedIn && $age < 18) {
    echo "Erişim için 18 yaşından büyük olmalısınız!";
}


?>

