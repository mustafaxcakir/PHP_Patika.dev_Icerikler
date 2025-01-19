<?php


/*$array = [
    'isim' => 'Mustafa',
    'soyisim' => 'Kemal',
    'yas' => 25
];*/

/*$obj = '{
  "isim": "Mustafa",
  "soyisim": "Kemal",
  "yas": 25
}';

//echo json_encode($array);
$array =  json_decode($obj,true);
echo "<pre>";
print_r($obj);

echo $array['isim'];*/

/*$obj = file_get_contents('kisi.json');

$array = json_decode($obj,true);
echo '<pre>';
print_r($array);*/

/*header('Content-Type: application/xml; charset=utf-8');*/

//XML DOSYASI İCİN

/*$kisiler = simplexml_load_file('kisiler.xml');
print_r($kisiler);*/

header('Content-Type: application/xml; charset=utf8');
$xml = new SimpleXMLElement('<kisiler/>');


require '../DB-Baglanti/baglanti.php';

$sql = 'SELECT * FROM users';
$q = $db->query($sql);

$users = $q->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user):
    $kisi = $xml->addChild('kisi');
    $kisi->addChild('isimsoyisim',$user['isim']);
    $kisi->addChild('eposta',$user['eposta']);
    $kisi->addChild('yas',$user['yas']);
endforeach;

echo $xml->asXML();


?>



