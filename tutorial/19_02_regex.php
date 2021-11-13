<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
$pattern2 = "/ain/";
echo preg_match_all($pattern, $str) . "<br>"; // -> 4
echo preg_match_all($pattern2, $str) . "<br>"; // -> 3
?>
