<?php
require 'baglanti.php';
echo "<pre>";

// groups ve users tablolarını birleştiriyoruz
$sql = "SELECT * 
        FROM users 
        INNER JOIN groups ON users.user_group = groups.group_id";

$q = $db->query($sql);
$array = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($array);
