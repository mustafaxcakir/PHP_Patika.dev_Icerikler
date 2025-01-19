<?php

//echo isset($_GET['isim']) ? $_GET['isim'] : 'Hata';

class MyError extends Exception
{
//$message;
//$code;
//$file;
//$line;
    public function Bomb()
    {
        errHandler($this->code, $this->message, $this->file, $this->line);

        echo $this->message . "<br>";
        echo $this->code . "<br>";
        echo $this->file . "<br>";
        echo $this->line . "<br>";
    }
}

/*
try{

throw new MyError('Hata');
}catch (MyError $e){

echo $e->Bomb();
}*/

function errHandler($no, $mes, $file, $line)
{
    include 'error.php';
}

set_error_handler('errHandler', E_ALL);

echo $isim;
echo $isim;
echo $isim;