<?php

$curl = curl_init('localhost');

curl_setopt_array($curl,[
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode([
        'title' => 'Test title',
        'body' => 'Test body',
        'userId' => 12,
    ])
]);

$result = curl_exec($curl);

curl_close($curl);

echo "<pre>";
print_r($result)

    ?>

<?php

if (extension_loaded("curl")) {
    echo "Curl kurulu.";
} else {
    echo "Curl kurulu değil.";
}

?>
<?php

// CURL isteğinin başlatılması
$ch = curl_init();

// CURL isteğinin gideceği URL
//curl_setopt($ch, CURLOPT_URL, "https://www.patika.dev/bootcamp");

// Aktarımı doğrudan çıktılamak yerine bir dizge olarak curl_exec() işlevinden döndürmek için true olmalıdır.
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt_array($ch, [
    CURLOPT_URL => "https://www.patika.dev/bootcamp",
    CURLOPT_RETURNTRANSFER => true
]);

// CURL isteğini çalıştırma.
$output = curl_exec($ch);

// CURL isteğinin sonlandırma.
curl_close($ch);


$desen = '@<h2 class="emphasis-small-header bootcamp-card">(.*?)</h2>@';

preg_match_all($desen,$output,$eslesme);
$count = 0;
foreach ($eslesme[1] as $item) {
    echo ++$count.' - '.$item."<br>---<br>";
}
