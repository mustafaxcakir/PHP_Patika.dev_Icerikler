<?php


try{
    $db = new PDO('mysql:host=localhost;dbname=testdb','root','');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->query("SET @@lc_time_names = 'tr_TR';");
    $db->query("SET CHARACTER SET utf8mb4");
    $db->query("SET CHARACTER_SET_CONNECTION=utf8mb4");

}catch (PDOException $e){
    echo $e->getMessage();
}

echo "<pre>";

//min-max-count-having

/*$sql = "SELECT MIN(yas) as en_genc, MAX(yas) as en_yasli FROM users";
$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($users);*/

$sql = "SELECT COUNT(id) as toplam_id, sehir FROM users GROUP BY sehir";
$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);
print_r($users);

?>