<?php

function ucgen($satirsayisi){
    $i = 1;
    while($i <= $satirsayisi){
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
        $i++;
    }
}

ucgen(15);

?>