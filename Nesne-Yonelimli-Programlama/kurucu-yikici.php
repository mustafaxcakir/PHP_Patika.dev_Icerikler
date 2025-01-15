<?php


class User{

    public function __construct()
    {
        echo 'Kurucu Method çalıştı'."<br>";
    }

    public function __destruct()
    {
        echo 'Yıkıcı Method çalıştı'."<br>";
    }

    public function selam()
    {
        echo "Selam, naber?"."<br>";
    }

}

$User = new User();

$User->selam();

?>