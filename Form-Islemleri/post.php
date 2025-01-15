<?php
error_reporting(E_ALL);

function filtre($p)
{
    return is_array($p) ? array_map('filtre', $p) : htmlspecialchars(trim($p));
}

$dizi = array_map('filtre', $_POST);

echo "<pre>";

print_r($dizi);

?>

