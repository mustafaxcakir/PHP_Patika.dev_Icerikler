<pre

<?php

$planets = ["mercury", "venus", "earth","mars","jupiter","saturn","uranus","neptune","","", NULL];
$mapped_arr = array_map(function($e){
    global $planets;
    if($e == ""){
        return NULL;}
    else{
        return $e;}
}, $planets);
$filtered_arr = array_filter($mapped_arr, function($e){
    return $e != NULL ? $e : false;
});

function randomArr($i){
    global $filtered_arr;
    $result = array_flip($filtered_arr);
    return array_rand($result, $i);
}

print_r(randomArr(2));
print_r(randomArr(3));
print_r(randomArr(2));
print_r(randomArr(4));
print_r(randomArr(5));

?>

</pre>
