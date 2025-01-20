<?php
require 'config/config.php';



/*if (isset($_POST['isim'])){
    $sql = "INSERT INTO kullanicilar SET isim = '{$_POST['isim']}', soyisim = '{$_POST['soyisim']}'";
    echo $sql;
    exit();
    $ins = $db->query($sql);// bu şekilde hazırlamayarak önüne geçeceğiz
    if ($ins){
        echo 'eklendi';
    }else {
        echo 'Bir hata oluştu';
    }
}*/

if (isset($_POST['isim'])){
   $ins = $db->prepare("INSERT INTO kullanicilar SET isim = ?, soyisim = ?");
   $ins->execute();
    if ($ins){
        echo 'eklendi';
    }else {
        echo 'Bir hata oluştu';
    }
}


?>
<!
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
<h1>Guvenlik</h1>

<!--<form method="post" action="">

    <input type="text" name="username"><br>
    <button type="submit">Gonder</button>

</form>-->

<form method="post" action="">

    <input type="text" name="isim"><br>
    <input type="text" name="soyisim"><br>

    <button type="submit">Gonder</button>

</form>

<?php
/*setcookie('isim','mustafa');
setcookie('sifre','123455');

echo htmlspecialchars($_POST['username'] ?? ''); //htmlspecialchars html taglarını etkisiz hale getiriyor. strip_tag da aynı işe yarıyor*/

/*setcookie(
        'theme',
    'dark',
    time() + 3600,
    '/',
    'localhost',
    false,
    true
);*/

echo $_POST['username'] ?? '';

?>

</body>
</html>



<?php
/*require 'config/config.inc';

$q = $db->query('SELECT * FROM users');

$users = $q->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($users);
*/?>