<?php

/*
 Görev: If-Else Ödevi
Kullanıcının yaşına göre mesaj veren bir sistem yaz:

18 yaşından küçükse: "Erişim izni yok."
18-65 yaş arasıysa: "Erişim izni verildi."
65 yaş üstüyse: "Yaşlılara özel erişim izni verildi."

 */

$age = 20;

if ($age < 18) {
    echo "Erişim izni yok.";
} elseif ($age >= 18 && $age < 65) {
    echo "Erişim izni verildi.";
} else{
    echo "Yaşlılara özel erişim izni verildi.";
}

?>