<?php


try {
    $db = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->query("SET @@lc_time_names = 'tr_TR';");
    $db->query("SET CHARACTER SET utf8mb4");
    $db->query("SET CHARACTER_SET_CONNECTION=utf8mb4");

} catch (PDOException $e) {
    echo $e->getMessage();
}

$select = $db->query("SELECT * FROM users LIMIT 10");
$users = $select->fetchAll(PDO::FETCH_ASSOC); //tablo isimleriyle eşleştirip getiriyor. FETCH_ASSOC / 2'de yazabilirdik. MODU

echo "<pre>";
//echo print_r($users);

//$update = $db->query('UPDATE users SET isim = "Mustafa Cakir" WHERE id = 1');

//$delete = $db->query('DELETE FROM users WHERE id = 1');

/*$insert = $db->query("
       INSERT INTO users SET 
       user_id = 231,
       isim = 'Mustafa aCakir',
       gsm = '05555555555',
       eposta = 'mustafa@cakir.com',
       sehir = 'Ankara',
       grup = 'A',
       posta_kodu = '34567',
       yas = 25
   ");

if ($insert) {
    echo "oldu";
}else {
    echo "hata";
}*/


$q = $db->prepare("INSERT INTO users SET 
isim = ?, 
gsm = ?, 
eposta = ?, 
sehir = ?, 
grup = ?, 
posta_kodu = ?, 
yas = ?");

$insert = $q->execute(['Mustafa Cakir', '123211ss', 'mustafa@cakir.com', 'Ankara', 'A', '34567', 25]);
if ($rows = $q->rowCount()) {
echo $db->lastInsertId();
echo $rows.'satir eklemedi';
}else {
echo "başarısız.";
}


 ?>