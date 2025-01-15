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

//Limit-Order-Where

$sql = "SELECT * FROM users WHERE id > 1 && users.id <10"; //burası türetilebilir...

$q = $db->query($sql);
$users = $q->fetchAll(PDO::FETCH_ASSOC);


print_r($users);

?>