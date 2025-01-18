<?php

function get($get)
{
    if (isset($_GET[$get])) return trim($_GET[$get]);
    else return false;
}

?>