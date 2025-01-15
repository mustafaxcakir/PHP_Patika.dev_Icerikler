<?php



//touch('test.txt'); // dosya oluşturuyor
//unlink('test.txt'); // dosya silmek için
//$file = fopen('test.txt', 'x');

//$file = fopen('test.txt', 'r');

/*while ($satir = fgets($file)) {
    echo $satir. "<br>";
}
fclose($file);*/

//echo filesize('test.txt');
//echo fread($file,875); //fread satır satır okuyoruz dosyayı

/*
fwrite($file , 'yeni veria');//yeni veri eklemeye yarıyor
fputs($file, 'yeni a');//yeni veri eklemeye yarıyor
fputs($file, "\nYeni Ters Veri");//yeni veri alt satıra ekleme
*/

/*
while ($satir = fgets($file)) {
    print_r(feof($file)); echo "---";
    echo $satir. "<br>";
}
*/

/*
$kontrol = file_exists('test.txt');//bir dosyanın var olup olmadıgını kontrol edebiliyoruz.
var_dump($kontrol);
aynı şekilde
is_file fonksiyonu, içerisine girilen adresin dosya olup olmadığını kontrol etmek için kullanılır.
*/

/*
file_put_contents('test.txt', 'İçerik put_contents ile eklendi', FILE_APPEND);//
$get = file_get_contents('test.txt');
print_r($get);
*/

$dosya = "<?php";
$dosya .= '$isim = "Mustafa";';
$dosya .= 'echo $isim';

file_put_contents('a.php', $dosya, FILE_APPEND);

?>