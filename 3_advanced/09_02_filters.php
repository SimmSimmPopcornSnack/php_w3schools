<?php
// $str = "<h1>Hello World!</h1>";
$str = 100;
$newStr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newStr;
?>
