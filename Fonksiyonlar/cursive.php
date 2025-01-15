<?php
/*
//tekrarlayan fonksiyonlar

function sayi($i) {
  echo $i;
  if($i<5) {
      $i++;
      sayi($i);
  }
}

sayi(1);*/
/*
$categories = [
    [ 'id' => 1,
        'parent' =>0,
        'name' => "Front End"
    ],
    [ 'id' => 2,
        'parent' =>0,
        'name' => "Back End"
    ],

];

function getCategories($array, $parent = 0){
    $html = "";
    $html .= "<ul>";
    foreach ($array as $value) {
       $html .= "<li>" .$value ['name']. "</li>";
    }
    $html .= "</ul>";
    return $html;
}

echo getCategories($categories, parent:0);*/

function faktoriyel($n) {
    if($n == 1) {
        return 1;
    }
    return $n * faktoriyel($n-1);
}

echo faktoriyel(5);

?>