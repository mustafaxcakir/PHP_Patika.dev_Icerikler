<?php
echo "<pre>";

if (isset($_POST['sayi'])) {
    $sayi = $_POST['sayi'];

    if ($sayi === "") {
        echo"Lütfen bir değer giriniz";
    }else {
        if($sayi % 3 == 0) {
            echo "Girdiginiz sayi ($sayi) 3'e tam bölünebilir";
        } else {
            $ilkBolunen= $sayi + (3 - $sayi % 3);
            echo "Girdiğiniz sayı ($sayi) 3'e bölünemez. Bölebileceğiniz ilk sayi $ilkBolunen'dir.";
        }
    }
}

?>

