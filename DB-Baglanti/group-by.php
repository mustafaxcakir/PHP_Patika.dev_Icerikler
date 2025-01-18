<?php

require 'baglanti.php';
echo "<pre>";

$sql = "SELECT COUNT(id) as toplam FROM users";

$q = $db->query($sql);
$users = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($users);

