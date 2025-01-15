<?php

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";

?>

<?php

$age = 10;

switch (true) {
    case $age < 0:
        echo "Yaş negatif değer olamaz :)";
        break;
    case $age <= 17:
        echo "Çocuk";
        break;
    case $age >= 18 && $age <= 64:
        echo "Yetişkin";
        break;
    case $age > 64:
        echo "Yaşlı";
        break;
    default:
        echo "Hatalı değer girildi";
}

?>
