<?php

date_default_timezone_set('Europe/Istanbul');

//$format = 'Y-m-d H:i:s';

$format = 'l F z';

echo _date(date($format));

echo "<br>";

echo time();

function _date($date){
    $date_en = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];
    $date_tr = [
        'Ocak',
        'Şubat',
        'Mart',
        'Nisan',
        'Mayıs',
        'Haziran',
        'Temmuz',
        'Agustos',
        'Eylül',
        'Ekim',
        'Kasım',
        'Aralık',
    ];

   return str_replace($date_en, $date_tr, $date);
}




?>