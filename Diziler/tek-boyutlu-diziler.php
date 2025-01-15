<?php

$isimler = array("Mustafa", "Ali", "Mehmet", "Ayşe");

echo "<pre>";
print_r($isimler);
//

echo $isimler[0];

$meyveler = [
    "meyve1" => "elma",
    "meyve2" => "armut",
    "meyve3" => "karpuz",
];

echo "<pre>";

// echo $meyveler["meyve2"];

var_dump($meyveler);

?>

<?php

$notlar = [
    "Math" => 85,
    "Science" => 90,
    "English" => 78,
];

echo "<pre>";

print_r($notlar);

if (array_key_exists("Math", $notlar)) {
    echo "Math notu var";
}else {
    echo "Math notu yok";
}


?>
