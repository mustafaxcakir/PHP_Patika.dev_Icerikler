<?php

require 'baglanti.php';

echo "<pre>";

//between

$sql = "SELECT * FROM users WHERE id BETWEEN 1 AND 3";
$q = $db->query($sql);
$users = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($users);

?>