<?php
function get_domain($url) {
  $str = '/^(?:https?.\/\/)?(?:[^@\/\n]+@)?(?:)?([^:\/?\n]+).*/m';
  preg_match_all($str, $url, $matches, PREG_SET_ORDER, 0);
  foreach ($matches as $key => $value) {
    // code...
    //var_dump($value);
    return $value[1];
  }
}
?>
