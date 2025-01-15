<?php
error_reporting(E_ALL);

echo '<pre>';

function filtre($p)
{
    return is_array($p) ? array_map('filtre', $p) : htmlspecialchars(trim($p));
}

$dizi = array_map('filtre', $_GET);

print_r($dizi);


?>