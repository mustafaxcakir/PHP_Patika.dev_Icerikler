<?php

/*file_exists('a'); //dizin sorgulama
var_dump(file_exists('a'));*/

//mkdir('mustafa');//dizin oluşturmak için

$dizinAdi = 'ahmet';

if (file_exists($dizinAdi)) {
    echo "Dizin var";
}else {
    if (mkdir($dizinAdi)) {
        echo "Dizin oluşturuldu";
    }else {
        echo "Dizin oluşturulamadı";
    }
}

//rmdir($dizinAdi); // dizin silmek için






?>

