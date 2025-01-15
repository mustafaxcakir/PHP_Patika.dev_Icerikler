<?php

/*Namespace Kullanımı
Kullanılması zorunlu değildir.
Aynı isimli sınıfların ayırt edilmesini sağlar.
Geleneksel olarak anadizinden bulunduğu klasöre kadar uzanan bir namespace tanımlanır.*/

require 'app/controller/Home.php';
require 'app/view/Home.php';


$Home = new \app\view\Home();

echo "<br>";

$Home = new \app\controller\Home();
