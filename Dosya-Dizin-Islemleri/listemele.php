<?php

/*$basedir = require '.\ayar.php';

$array = scandir($basedir);
echo "<pre>";
print_r($array);*/

$basedir = require './ayar.php';

/*$array = glob($basedir. '/*.php');

$dizi = array_map(function ($e) use ($basedir) {
    return str_replace($basedir, '/', '', $e);
},$array);

echo "<pre>";

print_r($dizi);*/

function listAll($dir) {
    $files = scandir($dir);
    foreach ($files as $file):
       echo $file . "<br>";
        endforeach;

}

listAll($basedir);

?>
