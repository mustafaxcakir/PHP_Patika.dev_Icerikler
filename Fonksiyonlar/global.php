<?php

$isim = "Mustafa";
$db = '';
function isimyaz(){
    global $isim;
    echo $isim;
}

isimyaz();

?>

<?php
function f($sayi)
{
    $total = 1;
    for ($i = 1; $i <= $sayi; $sayi--) {
        $total *= $sayi;
    }
    return $total;
}

echo f(3) * f(2);

?>
