#!/usr/bin/php

<?php
$url = "https://www.domain.com/login/admin.php?login&username=admin&password=admin&submit=login";

function get_domain($url) {
  $str = '/^(?:https?.\/\/)?(?:[^@\/\n]+@)?(?:)?([^:\/?\n]+).*/m';
  preg_match_all($str, $url, $matches, PREG_SET_ORDER, 0);
  foreach ($matches as $key => $value) {
    // code...
    //var_dump($value);
    return $value[1];
  }
}

echo get_domain($url);

?>
